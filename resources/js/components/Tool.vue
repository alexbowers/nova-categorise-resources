<template>
    <div>
        <h4 class="ml-6 leading-wide font-bold text-white-50% mb-2 text-sm capitalize cursor-pointer hover:text-white" @click.prevent="toggle">
            {{ header }}
            <template v-if="expanded">&minus;</template>
            <template v-else>&plus;</template>
        </h4>

        <transition-group tag="ul" class="list-reset">
            <slot v-if="expanded"></slot>
        </transition-group>
    </div>
</template>

<script>
    export default {
        props: {
            header: String,
        },
        data() {
            return {
                expanded: true,
            };
        },
        methods: {
            toggle() {
                this.expanded = !this.expanded
            }
        }
    }
</script>
