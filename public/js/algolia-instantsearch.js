(function () {
    const search = instantsearch({
        indexName: 'products',
        searchClient: algoliasearch('XXXXXXXXXXXXXXX', 'xxxxxxxxxxxxxxxxxxxxxxxx')
    });

    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
        })
    );

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                empty: 'No results',
                item: function (item) {
                    return `
                        <a href="${window.location.origin}/shop/${item.slug}">
                            <div class="instantsearch-result">
                                <div>
                                <img src="${window.location.origin}/storage/${item.image}" alt="img" class="algolia-thumb-result">                                
                                </div>
                                <div class="result-title">
                                    ${item._highlightResult.name.value}
                                <?div>  
                                <div class="result-details">
                                    ${item._highlightResult.details.value}
                                <?div>  
                                <div class="result-price">
                                    $${(item.price / 100).toFixed(2)}
                                <?div>  
                            </div>
                        </a>
                        <hr>
                    `;
                }
            }
        })
    );

    search.addWidget(
        instantsearch.widgets.pagination({
            container: '#pagination',
            scrollTo: 'header',
            // totalPages: 2,
        })
    );

    search.addWidget(
        instantsearch.widgets.stats({
            container: '#stats',
        })
    );

    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list',
            attribute: 'categories',
        })
    );

    search.start();

})();
