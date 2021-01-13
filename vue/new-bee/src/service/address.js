import axios from '../utils/axios'

export function getAddressDetail(id) {
  return axios.get(`/address/${id}`)
}

export function getDefaultAddress() {
  return axios.get(`/address/default`)
}
export function getAddressList() {
  return axios.get(`/address`, { pageNum: 1, pageSize: 1000 })
}