
        <form action="/konten/store" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="list_kata_kunci_target">Target Keywords</label>
                    <input type="text" class="form-control" id="list_kata_kunci_target" name="list_kata_kunci_target" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="list_buying_keyword">Buying Keywords</label>
                    <input type="text" class="form-control" id="list_buying_keyword" name="list_buying_keyword" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="list_kata_bombastis">Bombastic Words</label>
                    <input type="text" class="form-control" id="list_kata_bombastis" name="list_kata_bombastis" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nomer_wa">WA Number</label>
                    <input type="text" class="form-control" id="nomer_wa" name="nomer_wa" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="deskripsi_utama">Main Description</label>
                    <textarea class="form-control" rows="10" id="deskripsi_utama" name="deskripsi_utama" required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="list_kota_target">Target Cities</label>
                    <textarea class="form-control" rows="10" id="list_kota_target" name="list_kota_target" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Generate Content</button>
        </form>