<template>

<Layout>
<div>
<h1 class="text-3xl">List Users</h1>

<div style="margin-top:900px !important">
    {{cTime}}<Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>
    </div>
</div>
</Layout>
</template>
<script>
import Layout from '../shared/Layout';
import {Link} from '@inertiajs/inertia-vue';
export default {
    props:{
        appname:String,
        frameworks:Array,
        cTime:String
    },
    components:{Layout,Link}
}

</script>