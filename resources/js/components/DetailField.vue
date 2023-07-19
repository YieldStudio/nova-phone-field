<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <p v-if="fieldHasValue" class="flex items-center">
                <a :href="this.link" class="link-default">
                    {{ this.formatted }}
                </a>

                <CopyButton
                    v-if="fieldHasValue && field.copyable"
                    @click.prevent.stop="copy"
                    v-tooltip="__('Copy to clipboard')"
                    class="mx-0"
                />
            </p>
            <p v-else>&mdash;</p>
        </template>
    </PanelItem>
</template>

<script>
import { CopiesToClipboard, FieldValue } from 'laravel-nova';
import parsePhoneNumber from 'libphonenumber-js'

export default {
    mixins: [CopiesToClipboard, FieldValue],
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        phoneNumber(){
            if(this.field.value){
                try {
                    return parsePhoneNumber(this.field.value);
                } catch (e) {
                    return null;
                }
            }

            return null;
        },
        formatted() {
            return this.phoneNumber?.formatInternational() ?? '';
        },
        e164(){
            return this.phoneNumber?.format('E.164') ?? '';
        },
        link(){
            return this.phoneNumber?.getURI() ?? '';
        }
    },
    methods: {
        copy() {
            this.copyValueToClipboard(this.e164)
        },
    }
};
</script>
