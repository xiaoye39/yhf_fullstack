<template>
  <div class="address-box">
    <s-header :name="'地址管理'"></s-header>
    <div class="address-item">
      <van-address-list
        v-if="from != 'mine'"
        v-model="chosenAddressId"
        :list="list"
        default-tag-text="默认"
        @add="onAdd"
        @edit="onEdit"
        @select="select"
      />
      <van-address-list
        v-else
        v-model="chosenAddressId"
        :list="list"
        default-tag-text="默认"
        @add="onAdd"
        @edit="onEdit"
      />
    </div>
  </div>
</template>

<script>
import sHeader from '@/components/SimpleHeader'
import { onMounted, reactive, toRefs } from 'vue'
import { getAddressList } from '@/service/address'
import { useRouter, useRoute } from 'vue-router'
export default {
  components: {
    sHeader
  },
  setup() {
    const router = new useRouter()
    const route = new useRoute()
    const state = reactive({
      list: [],
      from: ''
    })

    onMounted( async () => {
      // 请求所有的地址列表
      const { data } = await getAddressList()
      // console.log(data);
      if (!data) {
        state.list = []
        return
      }
      console.log(data);
      // 
      // 
      //
    })
    // 新增地址
    const onAdd = () => {
      router.push({
        path: '/address-edit', query: { type: 'add', from: state.from}
      })
    }

    return {
      ...toRefs(state),
      onAdd
    }
  }
}
</script>

<style lang="less">
@import "../common/style/mixin";
.address-box {
  .van-radio__icon {
    display: none;
  }
  .address-item {
    margin-top: 44px;
    .van-button {
      background: @primary;
      border-color: @primary;
    }
  }
}
</style>