<template>
    <div v-if="show && team_member" class="fixed inset-0 z-50 flex items-center justify-center bg-dark-blue bg-opacity-50"
        @click="$emit('close')">
        <div class="modal max-sm:max-h-[500px] max-sm:overflow-y-scroll" :class="firstCategoryClass" @click.stop>
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:flex-[0_0_50%]">
                    <img class="w-full max-lg:mb-8 max-lg:w-1/2" :src="team_member.thumbnail" :alt="team_member.name">
                </div>
                <div class="lg:flex-[0_0_50%] lg:p-12">
                    <h3 class="tracking-wider mb-4">
                        <span class="font-walkway_ultra_bold t-38"
                            :class="selectedPersonCategory ? getColorClass(selectedPersonCategory.category.category_color) : categoryColors[0]"
                            v-html="team_member.name">
                        </span>
                    </h3>
                    <h4 class="font-walkway_oblique_bold mb-8">
                        <span class="text-white">{{ selectedPersonCategory.position }} | </span>
                        <span v-if="selectedPersonCategory"
                            :class="getColorClass(selectedPersonCategory.category.category_color)">
                            Chi Square {{ selectedPersonCategory.category.name }}
                        </span>
                        <template v-else v-for="(categoryColor, index) in categoryColors"
                            :key="nonAllCategories[index].term_id">
                            <span :class="categoryColor">
                                Chi Square {{ nonAllCategories[index].name }}
                            </span>
                        </template>
                    </h4>
                    <div class="mb-8 flex gap-4 items-center max-sm:flex-col max-sm:items-start">
                        <a :href="team_member.linkedin_account_link" target="_blank">
                            <svg class="max-w-[40px]" xmlns="http://www.w3.org/2000/svg" width="49.948" height="49.947"
                                viewBox="0 0 49.948 49.947">
                                <path id="linkedin-icon"
                                    d="M32,7.025A24.973,24.973,0,1,0,56.973,32,24.973,24.973,0,0,0,32,7.025ZM25.336,44.072H19.852V26.357h5.483ZM22.568,24.037a3.269,3.269,0,1,1,3.242-3.269A3.256,3.256,0,0,1,22.568,24.037ZM45.884,44.072H40.428v-9.3c0-2.55-.969-3.974-2.985-3.974-2.195,0-3.341,1.483-3.341,3.974v9.3H28.842V26.357H34.1v2.386a6.178,6.178,0,0,1,5.338-2.926c3.756,0,6.445,2.294,6.445,7.038Z"
                                    transform="translate(-7.025 -7.025)" fill="#ccc" />
                            </svg>
                        </a>
                        <div class="font-walkway_bold text-white t-19">
                            <a :href="'tel:' + team_member.phone_no">
                                {{ team_member.phone_no }} |
                            </a>
                            <a v-if="selectedPersonCategory" :href="'mailto:' + selectedPersonCategory.email">
                                {{ selectedPersonCategory.email }}
                            </a>
                        </div>
                    </div>
                    <div class="text-white" v-html="team_member.description"></div>
                </div>
            </div>
            <button class="absolute top-4 right-4 transition-all hover:rotate-90" @click="$emit('close')">
                <svg id="close" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                    <path id="Path_330" data-name="Path 330"
                        d="M38,12.83,35.17,10,24,21.17,12.83,10,10,12.83,21.17,24,10,35.17,12.83,38,24,26.83,35.17,38,38,35.17,26.83,24Z"
                        fill="#fff" />
                    <path id="Path_331" data-name="Path 331" d="M0,0H48V48H0Z" fill="none" />
                </svg>
            </button>
        </div>
    </div>
</template>


<script setup>
import { computed } from 'vue';

// Define props
const props = defineProps({
    team_member: Object,
    show: Boolean,
    selected_category: String
});

const getColorClass = (color) => {
    const colorMap = {
        orange: 'text-orange',
        red: 'text-red',
        grey: 'text-grey',
        steel_pink: 'text-steel-pink',
        blue: 'text-blue',
        green: 'text-green',
    };
    return colorMap[color] || 'text-white';
};

const selectedPersonCategory = computed(() => {
    if (props.selected_category === 'all' && props.team_member.person_category_details) {
        return props.team_member.person_category_details[0];
    }
    return props.team_member.person_category_details?.find(personCategory => personCategory.category.slug === props.selected_category);
});

const firstCategoryClass = computed(() => {
    if (selectedPersonCategory.value) {
        return selectedPersonCategory.value.category.slug + "-member";
    } else {
        const nonAllCategory = props.team_member.person_category_details?.find(cat => cat.category.slug !== 'all');
        return nonAllCategory ? nonAllCategory.category.slug + "-member" : '';
    }
});

const nonAllCategories = computed(() => {
    return props.team_member.person_category_details?.filter(cat => cat.category.slug !== 'all') || [];
});

const categoryColors = computed(() => {
    return nonAllCategories.value.map(cat => getColorClass(cat.category.category_color));
});

console.log(props.team_member);
</script>

<style scoped>
.modal {
    width: 100%;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 999;
    background-color: #04031a;
    -webkit-box-shadow: 10px 10px 30px -5px rgba(255, 255, 255, 0.2);
    box-shadow: 10px 10px 30px -5px rgba(255, 255, 255, 0.2);
    padding: 1rem;
    max-width: 1300px;
}
</style>