$ = jQuery;
/*
  This comment ensures these classes aren't purged by Tailwind.
  You should list all possible classes that are created dynamically.
  This list should be updated if you change what classes can be generated.
  py-16 py-24 py-32 pt-16 pt-24 pt-32 pb-16 pb-24 pb-32 my-16 my-24 my-32 mt-16 mt-4 mt-24 mt-32 mb-16 mb-24 mb-32 
   max-lg:py-16 max-lg:py-8 max-lg:py-12  max-lg:pt-16 max-lg:pt-8 max-lg:pt-12 max-lg:pb-16 max-lg:pb-8 max-lg:pb-12
   max-lg:my-16 max-lg:my-8 max-lg:my-12  max-lg:mt-16 max-lg:mt-8 max-lg:mt-12 max-lg:mb-16 max-lg:mb-8 max-lg:mb-12
   bg-blackGR bg-whiteGR bg-blueGR bg-lblueGR bg-aquaGR bg-brownGR bg-aliceBlueGR
   text-blackGR text-whiteGR text-blueGR text-lblueGR text-aquaGR text-brownGR text-aliceBlueGR
*/

export default function initBase() {
  const checkScroll = () => {
    const header = document.querySelector("header");
    if (document.documentElement.scrollTop >= 100) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };

  // check scroll position at load time
  checkScroll();

  // check scroll position upon scrolling
  window.addEventListener("scroll", checkScroll);

  // const showBtn = document.querySelector(".btn-bars"),
  //   closeBtn = document.querySelector(".btn-close"),
  //   navMenu = document.querySelector(".navbar-collapse");
  // showBtn.addEventListener("click", () => {
  //   navMenu.classList.toggle("showMenu");
  // });
  // closeBtn.addEventListener("click", () => {
  //   navMenu.classList.remove("showMenu");
  // });
}
