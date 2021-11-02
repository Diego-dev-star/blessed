jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engine = new Bloodhound({
        remote: {
            url: '/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#s").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),

        name: 'usersList',

        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item"><i class="pe-7s-look"></i><span>Ничего не найдено</span></div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="' + data.posts.title + '" class="list-group-item">' + data.image + '- @' + data.posts.created_at+ '</a>'
            }
        }
    });
});