<template>
    <PanelItem :field="field">
        <template #value>
            <a :href="`tel:+${unmaskedValue}`" v-if="field.value" class="no-underline text-primary">
                {{ field.value }}
            </a>
            <p v-else>&mdash;</p>
        </template>
    </PanelItem>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        unmaskedValue() {
            return this.field.value ? this.field.value.replace(/\D/g, '') : '';
        },
    },
};
</script>
