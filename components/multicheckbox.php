<div class="multicheckbox">
    <div id="genusList" class="multicheckboxblock">
        <label class="multicheckbox-label">
            <select name="genusBook" onclick="showGenusMulticheckbox()">
                <option id="genusOption" selected>Род произведения</option>
            </select>
            <div id="selectGenusList" class="select-list">
                <label class="checkbox-standart" for="epicGenusCheckbox">
                    <input id="epicGenusCheckbox" class="genus-checkbox" type="checkbox" name="genusBook" value="Эпос">Эпос   
                </label>
                <label class="checkbox-standart" for="lyricsGenusCheckbox">
                    <input id="lyricsGenusCheckbox" class="genus-checkbox" type="checkbox" name="genusBook" value="Лирика">Лирика   
                </label>
                <label class="checkbox-standart" for="dramaGenusCheckbox">
                    <input id="dramaGenusCheckbox" class="genus-checkbox" type="checkbox" name="genusBook" value="Драма">Драма   
                </label>
                <label class="checkbox-standart" for="lyroepicGenusCheckbox">
                    <input id="lyroepicGenusCheckbox" class="genus-checkbox" type="checkbox" name="genusBook" value="Лиро-эпические">Лиро-эпические   
                </label>
            </div>
        </label>
    </div>
    <div id="typeList" class="multicheckboxblock">
        <label class="multicheckbox-label">
            <select name="typeBook" disabled onclick="showTypeMulticheckbox()">
                <option id="typeOption" selected>Вид произведения</option>
            </select>
            <div id="selectTypeList" class="select-list">
                <div id="epicTypeList">
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Рассказ">Рассказ   
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Притча">Притча  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Очерк">Очерк  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Новелла">Новелла  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Повесть">Повесть  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Роман">Роман  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Роман-эпопея">Роман-эпопея  
                    </label>
                </div>
                <div id="lyricsTypeList">
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Стичи">Стихи   
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Ода">Ода  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Элегия">Элегия  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Сонет">Сонет  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Послание">Послание  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Эпиграмма">Эпиграмма  
                    </label>
                </div>
                <div id="dramaTypeList">
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Комедия">Комедия   
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Драма">Драма  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Трагедия">Трагедия  
                    </label>
                </div>
                <div id="lyroepicTypeList">
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Поэма">Поэма   
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Роман в стихах">Роман в стихах   
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Легенда">Легенда  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Сказ">Сказ  
                    </label>
                    <label class="checkbox-standart">
                        <input class="genus-checkbox" type="checkbox" name="typeBook" value="Баллада">Баллада  
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div id="genreList" class="multicheckboxblock">
        <label class="multicheckbox-label">
            <select name="genreBook" disabled onclick="showGenreMulticheckbox()">
                <option id="genreOption" selected>Жанр произведения</option>
            </select>
            <div id="selectGenreList" class="select-list">
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Автобиография">Автобиография   
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Альтернативная история">Альтернативная   
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Анекдот">Анекдот   
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Антиутопия">Антиутопия   
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Биография">Биография
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Боевик">Боевик 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Вестерн">Вестерн 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Детектив">Детектив 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Детская литература">Детская литература 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Драма">Драма 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Историческая литература">Историческая
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Киберпанк">Киперпанк 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Магия">Магия 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Мелодрамма">Мелодрамма 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Мистика">Мистика 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Научная литература">Научная литература 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Приключение">Приключение 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Психология">Психология 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Религиозная">Религиозная 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Рецензия">Рецензия 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Сказка">Сказка 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Социальная">Социальная 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Стимпанк">Стимпанк 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Романтика">Романтика 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Утопия">Утопия 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Ужасы">Ужасы 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Триллер">Триллер 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Фантастика">Фантастика 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Фанфик">Фанфик 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Философская литература">Философская 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Фэнтези">Фэнтези 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Эзотерика">Эзотерика 
                </label>
                <label class="checkbox-standart">
                    <input class="genus-checkbox" type="checkbox" name="genreBook" value="Эротика">Эротика 
                </label>
            </div>
        </label>
    </div>
    <div id="ageRestriction" class="multicheckboxblock">
        <label class="multicheckbox-label">
            <select name="ageRestriction" onclick="showARMulticheckbox()">
                <option id="AROption" selected>—</option>
            </select>
            <div id="selectARList" class="select-list">
                <label class="checkbox-standart" for="AR0">
                    <input id="AR0" class="genus-checkbox" type="checkbox" name="ageRestriction" value="0+">0+   
                </label>
                <label class="checkbox-standart" for="AR6">
                    <input id="AR6" class="genus-checkbox" type="checkbox" name="ageRestriction" value="6+">6+   
                </label>
                <label class="checkbox-standart" for="AR12">
                    <input id="AR12" class="genus-checkbox" type="checkbox" name="ageRestriction" value="12+">12+   
                </label>
                <label class="checkbox-standart" for="AR16">
                    <input id="AR16" class="genus-checkbox" type="checkbox" name="ageRestriction" value="16+">16+   
                </label>
                <label class="checkbox-standart" for="AR18">
                    <input id="AR18" class="genus-checkbox" type="checkbox" name="ageRestriction" value="18+">18+   
                </label>
            </div>
        </label>
    </div>    
</div>
