import {animate, inView, timeline, scroll, ScrollOffset, stagger} from "motion"

export default function animator() {
  if(document.querySelector('.page-template-template-markets-page')){
    scroll(
      animate(".progress-bar", { scaleX: [0, 1] }),
      {
        target: document.querySelector('.page-template-template-markets-page')
      }
    );
  }
}
