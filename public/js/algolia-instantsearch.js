(function () {
    const search = instantsearch({
        indexName: 'products',
        searchClient: algoliasearch('N0N14HI5TI', 'fb8f4e522bcd50249ce7e032db3c2e11'),
    });

    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#searchbox',
        })
    );

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
        })
    );

    search.start();

})();
