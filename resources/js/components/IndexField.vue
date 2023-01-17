<template>
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

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
        unmaskedValue() {
            return this.field.value ? this.field.value.replace(/\D/g, '') : '';
        },
    },
};
</script>
