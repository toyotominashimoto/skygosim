<template>
    <modal
        :name="modalId"
        height="auto"
        :shiftY="0.1"
        :scrollable="true"
    >
        <div class="container p-4">
            <div class="row mb-4">
                <div class="col-11">
                    <h5 class="modal-title">Purchase internet packages</h5>
                </div>
                <div class="col-1">
                    <button type="button" class="btn-close" @click="closeModal()"></button>
                </div>
            </div>

            <div class="row">
                <template v-for="(form, key) in forms">
                    <div class="col-12 mb-4">
                        <div class="mb-2">
                            <label for="iccid" class="form-label">ICCID</label>
                            <v-select
                                id="iccid"
                                :options="sims"
                                label="iccid"
                                :reduce="sim => sim.iccid"
                                @search="simQuerySearch"
                                v-model="form.iccid"
                            ></v-select>
                        </div>
                        <div class="mb-2">
                            <label for="packageId" class="form-label">Package ID</label>
                            <v-select
                                id="packageId"
                                :options="packages"
                                label="package_id"
                                :reduce="packageItem => packageItem.package_id"
                                @search="packageQuerySearch"
                                v-model="form.packageId"
                            ></v-select>
                        </div>

                        <button
                            v-if="forms.length > 1"
                            type="button"
                            class="btn btn-warning btn-sm"
                            @click="removeForm(key)"
                        >Remove fields</button>
                    </div>
                </template>

                <div class="col-3">
                    <button
                        type="button"
                        class="btn btn-info btn-sm"
                        @click="addNewForm"
                    >Add new fields</button>
                </div>
            </div>

            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    <button
                        type="button"
                        class="btn btn-light"
                        @click="save"
                    >Save</button>
                </div>
            </div>
        </div>
    </modal>
</template>

<script>
    export default {
        name: "PurchaseInternetPackagesModal",

        data() {
            return {
                loading: false,
                modalId: 'PurchaseInternetPackagesModal',
                forms: [
                    {
                        iccid: null,
                        packageId: null,
                    }
                ],
                sims: [],
                packages: [],
                search: {
                    simKeywords: '',
                    packageKeywords: '',
                },
                errors: {},
            }
        },

        created() {
            this.$root.$on('modal::show::' + this.modalId, this.showModal);
            this.loadAvailableSims();
            this.loadPackages();
        },

        beforeDestroy() {
            this.$root.$off('modal::show::' + this.modalId, this.showModal);
        },

        methods: {
            showModal(){
                this.forms = [{iccid: null, packageId: null,}];
                this.$modal.show(this.modalId);
            },

            closeModal() {
                this.forms = [{iccid: null, packageId: null,}];

                this.$modal.hide(this.modalId);
            },

            loadAvailableSims() {
                axios.get('/sims/get-available-sims', {
                    params: {
                        keywords: this.search.simKeywords,
                    }
                })
                    .then(res => {
                        this.sims = res.data;
                    });
            },

            loadPackages() {
                axios.get('/internet-packages/get-available-packages', {
                    params: {
                        keywords: this.search.packageKeywords,
                    }
                })
                    .then(res => {
                        this.packages = res.data;
                    });
            },

            simQuerySearch(search, loading) {
                Vue.set(this.search, 'simKeywords', search);

                Vue.nextTick(() => {
                    this.loadAvailableSims();
                });
            },

            packageQuerySearch(search, loading) {
                Vue.set(this.search, 'packageKeywords', search);

                Vue.nextTick(() => {
                    this.loadPackages();
                });
            },

            addNewForm() {
                this.forms.push({
                    iccid: null,
                    packageId: null,
                });
            },

            removeForm(key) {
                this.forms.splice(key, 1);
            },

            save() {
                this.loading = true;

                axios.post(`/internet-packages/activate-packages`, this.forms)
                    .then(res => {
                        this.loading = false;

                        this.$toast.open({
                            message: 'Packages successfully activated',
                            type: 'success',
                            position: 'bottom-left'
                        });

                        this.closeModal();
                    })
                    .catch(e => {
                        this.loading = false;

                        if (e.response ) {
                            this.$toast.open({
                                message: e.response.data.message,
                                type: 'error',
                                position: 'bottom-left'
                            });
                        }
                    })
            },
        }
    }
</script>

<style scoped>

</style>
