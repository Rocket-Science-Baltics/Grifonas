<template>
    <div class="relative bg-container cursor-pointer" @click="$emit('select', team_member)">
        <img :src="memberData.thumbnail" class="w-full" :alt="memberData.name" />
        <div class="info-container p-4 absolute bottom-0 left-0 z-10">
            <div v-if="selectedPersonCategory">
                <h4 v-if="selectedPersonCategory.category.slug !== 'all'" class="block tracking-wider t-h3 mb-[4px]"
                    :class="getColorClass(selectedPersonCategory.category.category_color)">
                    <span class="font-walkway_ultra_bold" v-html="memberData.name"></span>
                </h4>
                <div class="leading-[22px]">
                    <p class="text-white t-19 font-walkway_oblique_bold !mb-0">{{ selectedPersonCategory.position }}</p>
                    <p v-if="selectedPersonCategory.category.slug !== 'all'" class="font-walkway_oblique_bold t-19"
                        :class="getColorClass(selectedPersonCategory.category.category_color)">
                        Chi Square {{ selectedPersonCategory.category.name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, reactive, watchEffect } from "vue";
const props = defineProps(['team_member', 'selected_category', 'index']);
const { team_member, selected_category } = props;
const memberData = computed(() => {
    if (!team_member) return null;
    return reactive(team_member);
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

// console.log(selected_category);

// watchEffect(() => {
//     if (memberData.value && memberData.value.person_category_details) {
//         memberData.value.person_category_details.forEach((personCategory, index) => {
//             console.log(`personCategory at index ${index}:`, personCategory);
//             console.log('personCategory.category.slug:', personCategory.category.slug);
//         });
//     }
//     console.log('selected_category:', selected_category);
// });

const selectedPersonCategory = computed(() => {
    if (selected_category === 'all' && memberData.value?.person_category_details) {
        return memberData.value.person_category_details[0];
    }
    return memberData.value?.person_category_details?.find(personCategory => personCategory.category.slug === selected_category);
});
</script>

<style scoped></style>
