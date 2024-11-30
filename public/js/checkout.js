document.addEventListener('DOMContentLoaded', () => {
    const privateHouseCheckbox = document.getElementById('private-house');
    const apartmentFields = document.getElementById('apartment-fields'); // Поля "Квартира", "Подъезд", "Этаж", "Домофон"
    const counterFields = document.getElementById('counter-fields'); // Поля "Кол-во персон"

    // Функция для скрытия/показа полей
    function toggleHouseFields() {
        if (privateHouseCheckbox.checked) {
            apartmentFields.classList.add('hidden'); // Добавляем класс для скрытия
        } else {
            apartmentFields.classList.remove('hidden'); // Убираем класс для отображения
        }
    }

    // Инициализация
    privateHouseCheckbox.addEventListener('change', toggleHouseFields);

    // Сразу проверим состояние чекбокса при загрузке страницы
    toggleHouseFields();
});
