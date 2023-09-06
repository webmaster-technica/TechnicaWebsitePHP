<?php if(empty($_SESSION['user'])){
    $url = base_url()."app";
    header('Location: '.$url);
}else {?>
<div class="grid grid-pad nav-correction">
    <div class="col-1-1">
        <div class="content">
            <div class="search-schacht">
                <input type="text" />
            </div>
        </div>
    </div>
    <div class="col-1-1">
        <div class="content">
            <div id="schachtlist" class="schacht-list">
                <a v-for="schacht in list" :href="baseurl+'app/schacht?id='+schacht.id"><div class="schacht">
                        <div class="gegevens">
                            <div class="schacht-id">#<span>{{ schacht.id }}</span></div>
                            <h3>{{ schacht.naam }}</h3>
                        </div>
                        <div class="dijkels">
                            <span>{{ schacht.dijkels == null ? 0 : schacht.dijkels }} </span>
                        </div>
                </div></a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

    <script type="text/javascript">
        $(document).ready(function(){
            var schachtlist = new Vue({
                el: '#schachtlist',
                data: {
                    list: [],
                    baseurl: '<?php echo base_url(); ?>'
                }
            });
            schachtlist.list = JSON.parse('<?php echo json_encode($schachten); ?>');
            $('.search-schacht input').keyup(function(){
                searchSchacht($(this).val());
            });
            function searchSchacht(input){
                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url(); ?>ajax/searchSchacht",
                    dataType: "json",
                    crossDomain: true,
                    contentType: "application/x-www-form-urlencoded",
                    data: { input: input },
                    success : function(data){
                        schachtlist.list = data;
                    }
                });
            }
        });
        
    </script>