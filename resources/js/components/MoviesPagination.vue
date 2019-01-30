<template>
    <div>

        <div class="row">

            <div v-for="movie in moviesData" class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a :href="'viewMovie/'+movie.id"><img :src="'/storage/'+movie.picture" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a :href="'viewMovie/'+movie.id" >{{ movie.name }}</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


        </div><!-- close .row -->


        <ul class="page-numbers">
            <li v-if="current_page > 1">
                <a href="javascript:void(0)" class="previous page-numbers"  v-on:click.prevent="changePage(current_page - 1)">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>

            <li v-for="page in generatePages">
                <a v-show="page !== current_page" href="javascript:void(0)" class="page-numbers" v-on:click.prevent="changePage(page)">{{ page }}</a>
                <span v-show="page === current_page" class="page-numbers current">{{ page }}</span>
            </li>

            <li v-if="current_page < last_page">
                <a href="javascript:void(0)" class="next page-numbers" v-on:click.prevent="changePage(current_page + 1)">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>

        </ul>

    </div>

</template>

<script>
    export default{
        data: function() {
            return  {
                current_page: 1,
                last_page: 1,
                moviesData: [],
            }
        },
        mounted() {
            this.changePage(1);
        },
        computed: {
            generatePages() {
                let pagesHolder = [];
                let pageGenerator = 1;
                for (pageGenerator; pageGenerator <= this.last_page; pageGenerator++) {
                    pagesHolder.push(pageGenerator);
                }
                console.log(pagesHolder);
                console.log(this.last_page);
                return pagesHolder;
            }
        },
        methods : {
            changePage(page) {
                this.current_page = page;
                axios.get("/api/v1/movies-list-data?page="+page)
                    .then((response) => {
                        console.log(response.data);
                        this.last_page = response.data.last_page ;
                        this.current_page = response.data.current_page ;
                        this.moviesData = response.data.data ;
                    })
                    .catch(() => {
                        console.log('handle server error from here');
                    });
            }
        }
    }
</script>
