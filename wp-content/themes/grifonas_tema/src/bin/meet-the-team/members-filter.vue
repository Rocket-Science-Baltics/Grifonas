<template>
    <div class="relative filter-search-row  flex gap-y-4 items-start flex-col justify-between">
        <div class="categories flex gap-4 lg:gap-8 xl:gap-12 max-lg:flex-wrap">
            <span
                class="uppercase px-2 font-open_sans_extra_bold cursor-pointer transition-all opacity-60 hover:opacity-100"
                :class="[
                    { '!opacity-100 active': props.team_category === team_category.slug },
                    getColorClass(team_category.category_color)
                ]" v-for="(team_category, index) in sortedTeamCategoryList"
                @click="setActiveTeamCategory(team_category.slug)">
                {{ team_category.name }}
            </span>
        </div>
        <hr class="w-full absolute left-0 -bottom-[15px] h-[2px] bg-light-purple">
    </div>
</template>

<script setup>
import { onMounted, reactive, watchEffect } from "vue";

const props = defineProps(['team_members', 'team_category', 'team_category_list']);
const emits = defineEmits(['update:team_category']);

const data = reactive({
    'team_members': props.team_members,
    'team_category_list': props.team_category_list,
});

const sortOrder = ['all', 'group', 'economics', 'analytics', 'gaming', 'consulting', 'sustainability'];
let sortedTeamCategoryList = [];

const getIndex = (slug) => {
    const index = sortOrder.indexOf(slug);
    return index === -1 ? sortOrder.length : index;  // if not found, put it at the end
};

watchEffect(() => {
    // Sort your categories based on this order
    sortedTeamCategoryList = [...data.team_category_list].sort((a, b) => {
        return getIndex(a.slug) - getIndex(b.slug);
    });
});

const getColorClass = (color) => {
    switch (color) {
        case 'purple':
            return 'text-purple';
        case 'orange':
            return 'text-orange';
        case 'red':
            return 'text-red';
        case 'grey':
            return 'text-grey';
        case 'steel_pink':
            return 'text-steel-pink';
        case 'blue':
            return 'text-blue';
        case 'green':
            return 'text-green';
        default:
            return 'text-white';
    }
};

function setActiveTeamCategory(cat) {
    emits('update:team_category', -1);
    setTimeout(() => {
        emits('update:team_category', cat);
    }, 400);
}
</script>

<style scoped></style>
