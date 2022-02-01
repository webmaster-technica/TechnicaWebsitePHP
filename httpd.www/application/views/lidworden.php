<div class="block lidworden">
    <div class="container">
        <div class="grid textual">
            <h1 class="center h1">Lid worden</h1>
            <div class="col-1">
                <p>
                    Indien u lid wilt worden, kunt u onderstaand formulier invullen. Zodra wij dit ontvangen hebben, zullen wij contact met u opnemen om alles te regelen; lidkaart, lidgeld, ...
                </p>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="col-1">
                    <h2>Naam*</h2>
                    <input class="lidworden-input" type="text" name="name" required/>
                </div>
                <div class="col-1">
                    <h2>Geboortedatum*</h2>
                    <input id="datepicker" class="lidworden-input" type="text" name="birth_date" required/>
                </div>
                <div class="col-57">
                    <h2>Studierichting</h2>
                    <input class="lidworden-input" type="text" name="study" />
                </div>
                <div class="col-27">
                    <h2>Jaar</h2>
                    <input class="lidworden-input" type="number" name="study_year" />
                </div>
                <div class="col-1">
                    <h2>E-mail*</h2>
                    <input class="lidworden-input" type="email" name="email" required/>
                </div>
                <div class="col-1">
                    <h2>Gsm nummer*</h2>
                    <input class="lidworden-input" type="text" name="gsm" required/>
                </div>
                <div class="col-57">
                    <h2>Straat *</h2>
                    <input class="lidworden-input" type="text" name="street" required/>
                </div>
                <div class="col-27">
                    <h2>Huis nr*</h2>
                    <input class="lidworden-input" type="text" name="house_number" required/>
                </div>
                <div class="col-57">
                    <h2>Stad *</h2>
                    <input class="lidworden-input" type="text" name="city" required/>
                </div>
                <div class="col-27">
                    <h2>Postcode*</h2>
                    <input class="lidworden-input" type="text" name="postal" required/>
                </div>
                <div class="col-1">
                    <h2>Dopen</h2>
                    <input type="radio" name="dopen" value="Ja" /><span class="dopen">Ja</span>
                    <span style="margin-left: 50px;"><input type="radio" name="dopen" value="Nee" /><span class="dopen">Nee</span></span>
                </div>
                <div class="col-1">
                    <h2>Foto uploaden*</h2>
                    <input class="lidworden-input" type="file" name="file" required/>
                </div>
                <div class="robotic full" id="pot">
                    <h3>If you're human leave this blank:</h3>
                    <input name="robotest" type="text" id="robotest" class="robotest" />
                </div>
                <div class="col-1">
                    <input type="submit" value="Verstuur" class="call-to-action" />
                </div>
            </form>
        </div>
    </div>
</div>
