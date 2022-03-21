<div class="searchbar">
    <div class="namesearch_field">
        <input type="text" id="search_catalog_input" value="<?=$search = $_GET["search"];?>">
        <button onclick="SearchReplace()">поиск</button>
    </div>
    <div class="filters">
        <div>Сортировать по : </div>
        <select name="fitler_select" id="fitler_select">
            <option value="">По умолчанию</option>
            <option value="ABC">По алфавиту</option>
            <option value="CBA">По алфавиту обратно</option>
            <option value="NEW">Сначала новые</option>
            <option value="OLD">Сначала старые</option>
            <option value="POP">Сначала популярные</option>
            <option value="UPOP">Сначала не популярные</option>
        </select>
    </div>
</div>