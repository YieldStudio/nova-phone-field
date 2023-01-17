<template>
    <PanelItem :field="field">
        <template #value>
            <CopyButton
                        v-if="field.value && field.copyable && !shouldDisplayAsHtml"
                        v-tooltip="__('Copy to clipboard')"
                        @click.prevent.stop="copy"
                    >
                    <a :href="`tel:+${unmaskedValue}`" v-if="field.value" class="no-underline text-primary">
                {{ field.value }}
            </a>
            <p v-else>&mdash;</p>
                    </CopyButton>
            
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
