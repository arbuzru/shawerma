// resources/js/checkout.js

document.addEventListener('DOMContentLoaded', function() {
    const deliveryTypeSelector = document.querySelectorAll('input[name="delivery_type"]');
    const deliveryFields = document.querySelector('.delivery-fields');
    const pickupFields = document.querySelector('.pickup-fields');

    function toggleDeliveryFields() {
        const selectedType = document.querySelector('input[name="delivery_type"]:checked').value;

        if (selectedType === 'Delivery') {
            deliveryFields.style.display = 'block';
            pickupFields.style.display = 'none';
        } else {
            deliveryFields.style.display = 'none';
            pickupFields.style.display = 'block';
        }
    }

    deliveryTypeSelector.forEach(radio => {
        radio.addEventListener('change', toggleDeliveryFields);
    });

    toggleDeliveryFields(); // Инициализируем состояние по умолчанию
});
