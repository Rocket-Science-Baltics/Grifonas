jQuery(document).ready(function ($) {
    function deparam(query) {
        var pairs = query.split('&');
        var result = {};
        pairs.forEach(function(pair) {
            pair = pair.split('=');
            result[pair[0]] = decodeURIComponent(pair[1] || '');
        });
        return JSON.parse(JSON.stringify(result));
    }

    var load_jobs = function (action, filter_data = '', page = 1) {
        var data = {
            action: action,
            paged: page
        };

        if (filter_data) {
            // parse the filter data but do not include 'paged'
            var filter_data_obj = deparam(filter_data);
            delete filter_data_obj.paged;
            data = { ...data, ...filter_data_obj };
        }

        $.ajax({
            type: 'GET',
            url: my_ajax_object.ajax_url,
            data: data,
            dataType: 'json', // Set the expected response data type to JSON
            success: function (response) {
                $('#job_results').empty().append(response.posts);
                var jobItems = document.querySelectorAll('.animation-class');

                jobItems.forEach(function (item, index) {
                    setTimeout(function () {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 200);
                });

                // Create pagination
                var pagination = $('.pagination');
                pagination.empty();
                if (response.pagination) {
                    response.pagination.forEach(function(page) {
                        // Check if the page is the current page
                        var activeClass = page === parseInt(data.paged, 10) ? 'active !opacity-100' : '';
                        pagination.append('<span class="page-numbers t-22 cursor-pointer opacity-20 font-open_sans_extra_bold ' + activeClass + '">' + page + '</span>');
                    });
                }
                
                // Clear the URL parameters
                history.replaceState({}, null, "/jobs/");
            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    }

    // Load jobs if we are on the jobs page
    if(window.location.pathname === '/jobs/') {
    var urlParams = new URLSearchParams(window.location.search);
    var page = urlParams.get('paged') || 1;
    if (page === "1") {
        history.replaceState({}, null, "/jobs/"); // remove the ?paged=1 from URL
        }
        load_jobs('filter_jobs', window.location.search.substring(1), page);
    }

    $(document).on('submit', '#my_job_filter_form', function (e) {
        var form = $(this);
        var data = form.serialize();

        if ($('#job_results').length > 0) {
            e.preventDefault();
            load_jobs('filter_jobs', data);
        }
    });

    // Check the URL parameters and apply filter if necessary
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('job_keyword') || urlParams.has('job_continent') || urlParams.has('job_category')) {
        var page = urlParams.get('paged') || 1;
        load_jobs('filter_jobs', window.location.search.substring(1), page);
    }

    // set the dropdown values according to the URL parameters
    if (urlParams.has('job_keyword')) {
        $('#keyword').val(urlParams.get('job_keyword'));
    }
    if (urlParams.has('job_continent')) {
        $('#continent').val(urlParams.get('job_continent'));
    }
    if (urlParams.has('job_category')) {
        $('#markets').val(urlParams.get('job_category'));
    }

    var currentPage = 1;

    // Add event listener to pagination
    $(document).on('click', '.pagination span', function (e) {
        e.preventDefault();

        // Update the current page number
        currentPage = $(this).text();

        // Pass the current page number to load_jobs
        load_jobs('filter_jobs', $('#my_job_filter_form').serialize(), currentPage);
    });
});
