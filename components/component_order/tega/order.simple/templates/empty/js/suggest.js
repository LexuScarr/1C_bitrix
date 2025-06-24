ymaps.ready(function () {
    const addressInput = document.getElementById('address');
    const suggestionsContainer = document.getElementById('suggestions');

    if (!addressInput || !suggestionsContainer) return;

    const suggestView = new ymaps.SuggestView(addressInput, {
        provider: {
            suggest: function (request, options) {
                return ymaps.suggestion.suggest('���, ' + request, {
                    types: ['street', 'house'],
                    boundedBy: [[54.6, 55.8], [54.9, 56.1]]
                });
            }
        },
        results: 5
    });

    suggestView.events.add('select', function (e) {
        const selectedValue = e.get('item').value;
        addressInput.value = selectedValue.replace('���, ', '');
        suggestionsContainer.style.display = 'none';
        geocodeAndUpdate(selectedValue);
    });

    addressInput.addEventListener('input', function () {
        if (addressInput.value.length < 2) {
            suggestionsContainer.style.display = 'none';
        }
    });

    document.addEventListener('click', function (e) {
        if (!addressInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
            suggestionsContainer.style.display = 'none';
        }
    });
});