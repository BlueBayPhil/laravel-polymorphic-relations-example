<template>
    <div class="mb-3">
        <label for="tagEditor" class="form-label">Tags</label>
        <input type="hidden" name="tags" v-model="tagged">
        <ul>
            <li v-for="tag in tagItems" :key="tag">
                {{ tag }}
            </li>
        </ul>
        <input id="tagEditor" type="text" class="form-control" v-model="tagValue" v-on:keyup="onKeyUp($event)">
    </div>
</template>

<script>
export default {
    name: "TagEditor",
    props: ["tags"],
    data: function () {
        return {
            tagged: "",
            tagItems: [],
            tagValue: "",
        };
    },
    mounted() {
      // merge props into data
      this.tagged = tags;
      this.tagged.explode(',').forEach((v) => {
          this.tagItems.push(v);
      });
    },
    methods: {
        onKeyUp: function (event) {
            if (event.keyCode === 32) {
                if(!this.tagItems.includes(this.tagValue)) {
                    this.tagItems.push(this.tagValue.trim());
                    this.tagged = tagItems.implode(',');
                }
                this.tagValue = "";
            }
        }
    }
}
</script>

<style scoped>

</style>
