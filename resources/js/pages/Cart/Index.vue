<template>
    <div class="cart">
        <header-comp
            title="Shopping Cart"
        />

        <section class="ls s-py-80 s-py-lg-120 s-py-xl-160 shop-cart">
            <div class="container">
                <div class="row">
                    <main class="col-lg-12">
                        <table class="shop_table shop_table_responsive cart">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-name">ICCID</th>
<!--                                    <th class="product-name">Product</th>-->
                                    <th class="product-price">Expiration Date</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity product">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <template v-for="item in items">
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a
                                                href="#"
                                                class="remove"
                                                @click="removeItem(item.id)"
                                            >×</a>
                                        </td>

                                        <td class="product-name" data-title="Product">
                                            <span class="font-weight-bold">
                                                {{item.package.name_en}}
                                            </span>
                                        </td>

                                        <td class="product-name" data-title="Product">
                                            {{ item.sim.iccid }}
                                        </td>

<!--                                        <td class="product-name" data-title="Product">-->
<!--                                            {{item.package.data_eng}}-->
<!--                                            <br>-->
<!--                                            <span class="font-weight-bold">-->
<!--                                                {{item.package.period}} Days-->
<!--                                            </span>-->
<!--                                        </td>-->

                                        <td class="product-name" data-title="Product">
                                            {{ getExpirationDate() }}
                                        </td>

                                        <td class="product-price" data-title="Price">
                                            <span class="amount">
                                                <span>$</span>{{ item.price }}
                                            </span>
                                        </td>

                                        <td class="product-quantity product" data-title="Quantity">
                                            <span>
                                                {{ item.quantity }}
                                            </span>
                                        </td>

                                        <td class="product-subtotal" data-title="Total">
                                            <span class="amount">
                                                <span>$</span>{{ item.price }}
                                            </span>
                                        </td>
                                    </tr>
                                </template>

                                <tr>
                                    <td>
                                        <span class="amount">
                                            Total:
                                            <span>$</span>{{ totalPrice }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button
                                            v-if="!loading"
                                            type="button"
                                            class="btn btn-maincolor"
                                            name="apply_coupon"
                                            @click="checkout"
                                        >
                                            <span>Checkout</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>

            </div>
        </section>
    </div>
</template>

<script>
    import moment from "moment";

    export default {
        name: "CartIndex",

        data() {
            return {
                items: [],
                loading: false,
            }
        },

        computed: {
            totalPrice() {
                let totalPrice = 0;

                this.items.forEach(item => {
                    totalPrice += item.price;
                });

                return totalPrice;
            }
        },

        created() {
            this.loadCart();
        },

        methods: {
            loadCart() {
                axios.get('/user-cart')
                    .then(({data}) => {
                        this.items = data;
                    });
            },

            checkout() {
                this.loading = true;
                let itemIds = this.items.map(item => item.id);

                axios.post('/order/store', {item_ids: itemIds})
                    .then(({data}) => {
                        if (data) {
                            window.location.href = `/order/${data.id}/checkout`;
                        }
                    });
            },

            removeItem(itemId) {
                axios.delete(`/user-cart/${itemId}/delete`)
                    .then(({data}) => {
                        if (data) {
                            this.loadCart();
                        }
                    })
            },

            getExpirationDate() {
                return moment().add(180, 'days').format('MM/DD/YYYY');
            }
        }
    }
</script>

<style lang="scss">

</style>
