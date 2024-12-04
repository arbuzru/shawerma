document.addEventListener('DOMContentLoaded', () => {
    const privateHouseCheckbox = document.getElementById('private-house');
    const apartmentFields = document.getElementById('apartment-fields'); // Поля "Квартира", "Подъезд", "Этаж", "Домофон"
    const mapContainer = document.getElementById('map-container'); // Контейнер карты
    const mapElement = document.getElementById('map'); // Элемент карты
    let map, placemark;

    // Функция для скрытия/показа полей (Частный дом или Квартира)
    function toggleHouseFields() {
        if (privateHouseCheckbox.checked) {
            apartmentFields.classList.add('hidden'); // Скрываем поля квартиры
        } else {
            apartmentFields.classList.remove('hidden'); // Показываем поля квартиры
        }
    }

    // Слушатель изменения состояния чекбокса "Частный дом"
    privateHouseCheckbox.addEventListener('change', toggleHouseFields);

    // Сразу проверяем состояние чекбокса при загрузке страницы
    toggleHouseFields();

    // Функция для показа карты
    window.toggleMap = function () {
        mapContainer.classList.remove('hidden'); // Показываем контейнер карты
        if (!map) {
            initMap(); // Инициализируем карту, если её ещё нет
        }
    };

    // Функция для инициализации карты
    function initMap() {
        if (typeof ymaps === 'undefined') {
            console.error("Яндекс.Карты API не загружены.");
            return;
        }

        console.log("Инициализация карты...");
        map = new ymaps.Map(mapElement, {
            center: [59.9342802, 30.3350986], // Санкт-Петербург
            zoom: 10
        });

        // Добавление метки при клике на карту
        map.events.add('click', function (e) {
            const coords = e.get('coords');
            if (placemark) {
                placemark.geometry.setCoordinates(coords);
            } else {
                placemark = new ymaps.Placemark(coords, {}, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                });
                map.geoObjects.add(placemark);
            }
        });
    }

    // Проверка, была ли библиотека загружена
    if (typeof ymaps === 'undefined') {
        console.error("API Яндекс.Карты не подключён. Проверьте подключение.");
    } else {
        console.log("API Яндекс.Карты успешно загружен.");
    }
});
