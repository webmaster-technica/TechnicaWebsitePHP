</main>
<footer>
    <div class="block footer">
        <div class="container">
            <div class="grid">
                <div class="col-3 mcol-1 contact-form textual">
                    <h3>Stel een vraag</h3>
                    <form method="post" action="form_succes">
                        <input type="text" placeholder="Naam" class="input" name="name" />
                        <input type="text" placeholder="E-mail adres" class="input" name="email" />
                        <textarea placeholder="Uw bericht" class="input" name="message"></textarea>
                        <div class="robotic full" id="pot">
                            <h3>If you're human leave this blank:</h3>
                            <input name="robotest" type="text" id="robotest" class="robotest" />
                        </div>
                        <input type="submit" name="submit" class="call-to-action" value="Verstuur"/>
                    </form>
                </div>
                <div class="col-3 mcol-1 contact-info textual">
                    <h3>Contact informatie</h3>
                    <div class="table-cell selectable">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>
                            <a href="mailto:info@technica-antwerpen.be">info@technica-antwerpen.be</a>
                        </p>
                    </div>
                    <div class="table-cell selectable">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>
                            <a href="tel:+32485501297">+32 (0)485 50 12 97</a>
                        </p>
                    </div>
                    <div class="table-cell selectable">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p style="cursor: pointer"  onclick="window.open('https\:\/\/goo.gl/maps/3VBnaTRSVANoru719','_blank')">
                            Ellermanstraat 33<br>
                            2060 Antwerpen
                        </p>
                    </div>
                    <div class="table-cell selectable">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <p>
                            <a style="text-decoration: underline" href="https://www.linkedin.com/company/technica-antwerpen/" target="_blank">LinkedIn Technica</a>
                        </p>
                    </div>
                    <div class="table-cell" style="padding-bottom: 0;">
                        <i class="fa fa-dropbox" aria-hidden="true"></i>
                        <a href="<?php echo base_url();?>dropbox" style="text-decoration: underline;">Dropbox Technica</a>
                    </div>
                    </div>
                    <div class="col-3 mcol-1 textual">
                        <h3>Facebook</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/StudentenverenigingTechnica/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/StudentenverenigingTechnica/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/StudentenverenigingTechnica/">Technica</a></blockquote></div>
                        <h3>Statuten</h3>
                        <div data-href="http://www.ejustice.just.fgov.be/tsv_pdf/2019/08/07/19329540.pdf" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="http://www.ejustice.just.fgov.be/tsv_pdf/2019/08/07/19329540.pdf" class="fb-xfbml-parse-ignore"><a href="http://www.ejustice.just.fgov.be/tsv_pdf/2019/08/07/19329540.pdf">Statuten</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="socket">
        <div class="container">
            © 2017 - Ruben Nemes
        </div>
    </div>
</footer>
</body>
</html>