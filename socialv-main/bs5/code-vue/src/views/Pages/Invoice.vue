<template>
  <div class="row">
    <div class="col-sm-12">
      <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
            <h3 class="text-white">Invoice Page</h3>
            <p class="text-white">lorem ipsum</p>
        </div>
      </div>
    </div>
      <div class="col-sm-12">
        <iq-card>
          <template v-slot:body>
              <div class="row">
                  <div class="col-lg-6">
                      <img :src="image" alt="logo" class="img-fluid w-25">
                  </div>
                  <div class="col-lg-6 align-self-center">
                      <h4 class="mb-0 float-end">{{ title }}</h4>
                  </div>
                  <div class="col-sm-12">
                      <hr class="mt-3">
                      <h5 class="mb-0">{{ invoice.name }}</h5>
                      <p>{{ invoice.description }}</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="table-responsive-sm">
                      <table class="table" :items="invoice.order">
                          <thead>
                              <tr>
                                  <th scope="col">Order Date</th>
                                  <th scope="col">Order Status</th>
                                  <th scope="col">Order ID</th>
                                  <th scope="col">Billing Address</th>
                                  <th scope="col">Shipping Address</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Jan 17, 2016</td>
                                  <td><span class="badge badge-danger">Unpaid</span></td>
                                  <td>250028</td>
                                  <td>
                                  <p class="mb-0">PO Box 16122 Collins Street West<br>Victoria 8007 Australia<br>
                                      Phone: +123 456 7890<br>
                                      Email: demo@SocialV.com<br>
                                      Web: www.SocialV.com
                                  </p>
                                  </td>
                                  <td>
                                  <p class="mb-0">PO Box 16122 Collins Street West<br>Victoria 8007 Australia<br>
                                      Phone: +123 456 7890<br>
                                      Email: demo@SocialV.com<br>
                                      Web: www.SocialV.com
                                  </p>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <h5>{{ invoice.summary }}</h5>
                      <div class="table-responsive-sm">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th v-for="(item,index) in invoice.orderSummaryFields" :key="index" :class="item.key === 'item' ? 'text-start' : ''">{{ item.label }}</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr v-for="(body, bodyKey) in invoice.orderSummary" :key="bodyKey">
                                <template v-for="(item,index) in invoice.orderSummaryFields">
                                  <th v-if="item.key === 'id'" :key="item.key+index">{{ body[item.key] }}</th>
                                  <td v-else-if="item.key === 'item'" :key="item.key+index" class="text-start">
                                  <h6 class="mb-0">Web Design</h6>
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </td>
                                  <td v-else :key="item.key+index" :class="item.key === 'total' ? 'font-weight-bold' : ''">
                    {{ body[item.key] }}</td>

                                </template>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                      <h5 class="mt-5">Order Details</h5>
                      <div class="table-responsive-sm">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th  v-for="(item,index) in invoice.OrderDetailField" :key="index" :class="item.key === 'bank' ? 'text-left' : ''">{{ item.label }}</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr v-for="(body, bodyKey) in invoice.OrderDetails" :key="bodyKey">
                                <template v-for="(item,index) in invoice.OrderDetailField">
                                  <th v-if="item.key === 'bank'" :key="item.key+index">{{ body[item.key] }}</th>
                                  <td v-else :key="item.key+index" :class="item.key === 'total' ? 'font-weight-bold' : ''">
                    {{ body[item.key] }}</td>
                                </template>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                  </div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6 text-end">
                      <button type="button" class="btn btn-link mr-3"><i class="ri-printer-line"></i> Download Print</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                  <div class="col-sm-12 mt-5">
                      <b class="text-danger">Notes:</b>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                  </div>
              </div>
          </template>
        </iq-card>
      </div>
  </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'Invoice',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
      image: require('../../assets/images/logo.png'),
      title: 'Invoice',
      invoice: {
        name: 'Hello, Nik Jones',
        summary: 'Order Summary',
        detail: 'Order Detail',
        description: 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.',
        order: [
          {
            orderDate: 'Jan 17, 2016',
            orderStatus: 2,
            orderID: '250028',
            billingAddress: 'PO Box 16122 Collins Street West <br> Victoria 8007 Australia <br> Phone: +123 456 7890 <br> Email: demo@socialvue.com <br> Web: www.socialvue.com',
            shippingAddress: 'PO Box 16122 Collins Street West <br> Victoria 8007 Australia <br> Phone: +123 456 7890 <br> Email: demo@socialvue.com <br> Web: www.socialvue.com'
          }
        ],
        orderSummaryFields: [
          {
            key: 'id',
            label: '#'
          },
          {
            key: 'item',
            label: 'Item'
          },
          {
            key: 'quantity',
            label: 'Quantity'
          },
          {
            key: 'price',
            label: 'Price'
          },
          {
            key: 'total',
            label: 'Total'
          }
        ],
        orderSummary: [
          {
            id: 1,
            item: {
              title: 'Web Design',
              description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            },
            quantity: '5',
            price: '$120',
            total: '$2,880.00'
          },
          {
            id: 2,
            item: {
              title: 'Web Design',
              description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            },
            quantity: '5',
            price: '$120',
            total: '$2,880.00'
          },
          {
            id: 3,
            item: {
              title: 'Web Design',
              description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            },
            quantity: '5',
            price: '$120',
            total: '$2,880.00'
          },
          {
            id: 4,
            item: {
              title: 'Web Design',
              description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            },
            quantity: '5',
            price: '$120',
            total: '$2,880.00'
          }
        ],
        OrderDetailField: [
          {
            key: 'bank',
            label: 'Bank'
          },
          {
            key: 'accNo',
            label: 'Acc.No'
          },
          {
            key: 'dueDate',
            label: 'Due Date'
          },
          {
            key: 'subTotal',
            label: 'Sub-total'
          },
          {
            key: 'discount',
            label: 'Discount'
          },
          {
            key: 'total',
            label: 'Total'
          }
        ],
        OrderDetails: [
          {
            bank: 'Threadneedle St',
            accNo: '12333456789',
            dueDate: '12 November 2019',
            subTotal: '$4597.50',
            discount: '10%',
            total: '$4137.75 USD'
          }
        ],
        note: 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.'
      }
    }
  }
}
</script>
