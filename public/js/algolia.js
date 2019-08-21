(function () {
    const client = algoliasearch("N0N14HI5TI", "fb8f4e522bcd50249ce7e032db3c2e11");
    const index = client.initIndex('products');
    var enterPressed = false;
    //initialize autocomplete on serach input (ID selector must match)
    autocomplete('#aa-search-input',
        { hint: false}, {
            source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
            // value to be displayed in input control after user's suggestion selection
            displayKey: 'name',
            //hash of tamplates used when rendering dataset
            templates: {
                // header: '<div class="aa-suggestions-category">Products</div>',
                //'suggestion' templating function used torender a single suggestion
                suggestion: function(suggestion) {
                    const markup = `
                    <div class="algolia-result">
                        <span>
                            <img src="${window.location.origin}/storage/${suggestion.image}" alt="img" class="algolia-thumb">
                            ${suggestion._highlightResult.name.value}
                        </span>
                        <span>$${(suggestion.price / 100).toFixed(2)}</span>
                    </div>
                    <div class="algolia-details">
                        <span>${suggestion._highlightResult.details.value}</span>
                    </div>
                `;
                    return markup;
                    // return '<span>' +
                    //     suggestion._highlightResult.name.value + '</span><span>' +
                    //     suggestion.price + '</span><span>hello</span>';
                },
                empty: function (result) {
                    return 'Sorry, we did not find any results for "' + result.query + '"';
                }
            }
        }).on('autocomplete:selected', function (event, suggestion, dataset) {
            // console.log(suggestion);
            window.location.href = window.location.origin + '/shop/' + suggestion.slug;
            enterPressed = true;
    }).on('keyup', function (event) {
        if (event.keyCode == 13 && !enterPressed) {
            // alert('enter passed');
            window.location.href = window.location.origin + '/search-algolia?q=' + document.getElementById('aa-search-input').value;
        }
    });
})();
