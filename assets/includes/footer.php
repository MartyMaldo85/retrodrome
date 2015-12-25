      </main>
      <!-- /content -->

      <footer id="page-footer">
        <span class="copyright">&copy; <?php echo date("Y") ?> Retrodrome. All rights reserved.</span>
        <span class="love">with &nbsp;<img class="heart" src="assets/img/icon-heart.svg" width="12" height="12" alt="heart icon">&nbsp; from 1985</span>
        <p class="copyright">by <a href="http://www.martymaldo.com/" target="_blank">Martin Maldonado</a>.</p>
      </footer>
    </div>
    <!-- /wrapper -->

    <!-- scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/functions.js"></script>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>-->

    <!-- headroom plugin -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.js"></script>
    <!-- /headroom plugin -->

    <!-- read more plugin -->
    <!-- <script src="assets/js/readmore.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="assets/js/readmore.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- /readmore plugin -->

    <!-- js nes emulator -->
    <script src="assets/js/lib/dynamicaudio-min.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/nes.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/utils.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/cpu.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/keyboard.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/mappers.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/papu.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/ppu.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/rom.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/nes-emu/ui.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" charset="utf-8">
      var nes;
        $(function() {
          nes = new JSNES({
            'ui': $('#emulator').JSNESUI({
              "US": [
                ['Super Mario Bros. 3', 'roms/smb3-us.nes']
              ],
              "UK": [
                ['Super Mario Bros. 3', 'roms/smb3-uk.nes']
              ]
            })
          });
        });
    </script>
    <!-- /js nes emulator -->
    <!-- /scripts -->

  </body>
</html>