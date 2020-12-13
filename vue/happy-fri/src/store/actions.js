export default {
  addNum({ commmit, state }, id) {
    commmit('REMEMBER_ANSWER', id)
    
    if (state.itemNum < state.itemDetail.length) {
      commmit('ADD_ITEMNUM', 1)
    }
  }
}