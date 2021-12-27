<div id="post-modal" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog post-modal">

        <div class="div_set RnEpo gpWnf Yx5HN uk-modal-close-default" role="presentation">
            <div class="div_set NOTWr">
                <button class="wpO6b uk-modal-close-default" type="button">
                    <div class="div_set QBdPU ">
                        <svg aria-label="Close" class="_8-yf5 " color="#ffffff" fill="#ffffff" height="24"
                            role="img" viewBox="0 0 24 24" width="24">
                            <polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline>
                            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <div class="div_set pbNvD" aria-label="Create new post" role="dialog">
            <div class="div_set _1XyCr HOstH ">
                <div class="div_set"
                    style="width: 800px; max-width: 1195px; min-width: 688px; min-height: 391px; max-height: 898px;">
                    <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_ vwCYk  i0EQd">
                        <form class="div_set" action="{{ route('posts.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm " style="width: 100%;">
                                <div class="div_set">
                                    <div class="div_set eiUFA  ">
                                        <div class="div_set WaOAr">
                                            <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm  XfCBB g6RW6 ">
                                                <label for="file-upload"
                                                    class="uplode_photo  custom-file-upload sqdOP  L3NKy   y3zKF">Uplode photo</label>
                                                <input id="file-upload" type="file" name="post_img"
                                                    onchange="loadFile(event)">
                                            </div>
                                        </div>
                                        <h1 class="m82CD   TNiR1">Create new post</h1>
                                        <div class="div_set WaOAr">
                                            <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm  XfCBB g6RW6 ">
                                                <button class="div_set sqdOP yWX7dy3zKF " type="submit">Share</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="div_set uYzeu gIMwG" style="width: 800px;">

                                <div class="div_set _C8iK DCaGL" style="opacity: 1;">
                                    <div class="div_set Enlg5">
                                        <div class="div_set _FsHZ">
                                            <div class="div_set N9UEt HsptU"></div>
                                            <div class="div_set V4b9z">
                                                <div class="div_set hhLES">
                                                    <img id="output" alt="Photo for tag placement"
                                                        class="agsn8"
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKleK7Fy87gyoKyP9lkm0HnM8qrO0MkvivmDzRCfVOymnbm_6-FMbUGvmga_z2-h8PduQ&usqp=CAU">
                                                    <div class="div_set civB6" role="button" tabindex="0"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="div_set _83r9B" style="opacity: 1;">
                                    <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_ vwCYk  ">
                                        <div class="div_set IJeHu ">
                                            <div class="div_set brfp7">
                                                <div
                                                    class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm   _5VUwz y2rAt ">
                                                    <div class="div_set c6PcF">
                                                        <div aria-labelledby="f3a6b0696979b8 f2ec13863b44104 f2b785affd02054 f1a58893fc3d2e8"
                                                            class="div_set qF0y9  Igw0E  rBNOH  eGOV_   ybXk5 _4EzTm ">
                                                            <div
                                                                class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm  yC0tu  ">
                                                                <span class="_2dbep " role="link" tabindex="-1"
                                                                    style="width: 28px; height: 28px;"><img
                                                                        alt="{{Auth::user()->name}}"
                                                                        class="_6q-tv" crossorigin="anonymous"
                                                                        data-testid="user-avatar" draggable="false"
                                                                        src="{{Auth::user()->user_img}}"></span>
                                                            </div>
                                                            <div class="div_set   qF0y9   Igw0E IwRSH YBx95  vwCYk  ">
                                                                <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm "
                                                                    id="f2ec13863b44104">
                                                                    <div
                                                                        class="div_set _7UhW9   xLCgt  MMzan  KV-D4fDxYl ">
                                                                        <div
                                                                            class="div_set _7UhW9vy6Bb  qyrsm KV-D4   uL8Hv  ">
                                                                            {{Auth::user()->name}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm ">
                                                    <div class="div_set   qF0y9   Igw0E IwRSH  eGOV_  _4EzTm ">

                                                        <textarea name="post_text" aria-label="Write a caption..."
                                                            placeholder="Write a caption..." class="lFzco"
                                                            autocomplete="off" autocorrect="off"
                                                            style="height: 24px !important;"></textarea>
                                                    </div>


                                                    <div class="div_set -tpzm"></div>
                                                </div>

                                                <hr class="W4P49">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
