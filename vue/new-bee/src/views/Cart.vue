<template>
  <div class="cart-box">
    <s-header :name="'购物车'" :back="false"></s-header>
    <!-- 列表 -->
    <div class="cart-body">
      <van-checkbox-group v-model="result" @change="groupChange">

        <van-swipe-cell v-for="(item, index) in list" :key="index">
          <div class="good-item">
            <van-checkbox name="item.cartItemId"></van-checkbox>
            <div class="good-img">
              <img src="$filters.profix(item.goodsCoverImg)" alt="" />
            </div>
            <div class="good-desc">
              <div class="good-title">
                <span>华为mate40</span>
                <span>x1</span>
              </div>
              <div class="good-btn">
                <div class="price">￥{{item.sellingPrice}}</div>
                <van-stepper integer min="1" max="5" v-model="value" />
              </div>
            </div>
          </div>
          <template #right>
            <van-button
              square
              icon="delete"
              type="danger"
              class="delete-button"
            />
          </template>
        </van-swipe-cell>
        <!-- <van-checkbox name="b">复选框 b</van-checkbox> -->
      </van-checkbox-group>
    </div>
    <!-- 合计 -->
    <van-submit-bar
      v-if="true"
      class="submit-all"
      :price="total * 100"
      button-text="结算"
      @submit="onSubmit"
    >
      <van-checkbox @click="allCheck" v-model="checkAll">全选</van-checkbox>
    </van-submit-bar>
    <div class="empty" v-if="false">
      <img
        class="empty-cart"
        src="//s.yezgea02.com/1604028375097/empty-car.png"
        alt="空购物车"
      />
      <div class="title">购物车空空如也</div>
      <van-button round color="#1baeae" type="primary" @click="goTo" block
        >前往选购</van-button
      >
    </div>
    <navBar />
  </div>
</template>

<script>
import sHeader from "@/components/SimpleHeader";
import navBar from "@/components/NavBar";
import { computed, onMounted, reactive, toRefs } from "vue";
import { Toast } from 'vant';
import { getCart } from '@/service/cart';
export default {
  components: {
    sHeader,
    navBar,
  },
  setup() {
    const state = reactive({
      result: [],
      list: []
    });
    onMounted(() => {
      init();
    });
    const init = async () => {
      Toast.loading({
        message: "加载中...",
        forbidClick: true,
      });
      const { data } = await getCart({
        pageNumber: 1
      })
      console.log(data);
      state.list = data
      state.result = data.map(item.cartItemId)
    };

    // 全选
    const allCheck = () => {
      if (!state.checkAll) {
        state.result = state.list.map(item.cartItemId)
      } else {

      }
    }

    // 总价格
    const total = computed(() => {
      let sum = 0
      let _list = state.list.filter(item => state.result.includes(item.cartItemId))
      _list.forEach(item => {
        sum += item.goodsCount * item.selling
      })
    })
    
    // 单选
    const 
    return {
      ...toRefs(state),
    };
  },
};
</script>

<style lang="less">
@import "../common/style/mixin";
.cart-box {
  .cart-header {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10000;
    .fj();
    .wh(100%, 44px);
    line-height: 44px;
    padding: 0 10px;
    .boxSizing();
    color: #252525;
    background: #fff;
    border-bottom: 1px solid #dcdcdc;
    .cart-name {
      font-size: 14px;
    }
  }
  .cart-body {
    margin: 60px 0 100px 0;
    padding-left: 10px;
    .good-item {
      display: flex;
      .good-img {
        img {
          .wh(100px, 100px);
        }
      }
      .good-desc {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1;
        padding: 20px;
        .good-title {
          display: flex;
          justify-content: space-between;
        }
        .good-btn {
          display: flex;
          justify-content: space-between;
          .price {
            font-size: 16px;
            color: red;
            line-height: 28px;
          }
          .van-icon-delete {
            font-size: 20px;
            margin-top: 4px;
          }
        }
      }
    }
    .delete-button {
      width: 50px;
      height: 100%;
    }
  }
  .empty {
    width: 50%;
    margin: 0 auto;
    text-align: center;
    margin-top: 200px;
    .empty-cart {
      width: 150px;
      margin-bottom: 20px;
    }
    .van-icon-smile-o {
      font-size: 50px;
    }
    .title {
      font-size: 16px;
      margin-bottom: 20px;
    }
  }
  .submit-all {
    margin-bottom: 50px;
    .van-checkbox {
      margin-left: 10px;
    }
    .van-submit-bar__text {
      margin-right: 10px;
    }
    .van-submit-bar__button {
      background: @primary;
    }
  }
  .van-checkbox__icon—checked .van-icon {
    background-color: @primary;
    border-color: @primary;
  }
}
</style>
