import './scss/index.scss';
import initBase from "./js/initBase";
import initComponents from "./js/components";
import initAnimations from "./js/animations";

window.onload = function () {
    initBase();
    initComponents();
    initAnimations();
}