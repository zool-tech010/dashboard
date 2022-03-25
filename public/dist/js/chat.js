$(function () {
    "use strict";

    let chat = `
    <section class='position-fixed chat'>
    <div class="chat-wrap position-relative">
        <!-- <button class='btn chat-close'><i class='fas fa-times'></i></button> -->
        <div class="messanger">
            <div class="row">
              <!--messages -->
              <div class="col-lg-9"> 
                <header class='messanger-header justify-content-between d-flex'>
                  <div class='name mt-1'>Taher Ahmed</div>
                  <div class="status d-flex align-items-center mt-2">
                    غير متاح  <span class='bg-danger rounded-circle mr-2'></span> 
                    <button class='btn d-lg-none chat-toggler p-0 text-white mr-3'><i class='fas fa-bars'></i></button>
                  </div>
         
                </header>
                <div class="messages position-relative">
                  <!--message block -->
                  <div class="message-wrap">
                    <div class="message">
                      مرحبا بك 
                    </div>
                  </div>
          <!--message block -->
                  <div class="message-wrap">
                    <div class="message message-other float-left">
                      مرحبا بك 
                    </div>
                  </div>

          <!--message block -->
                  <div class="message-wrap">
                    <div class="message">
                      مرحبا بك 
                    </div>
                  </div>
          <!--message block -->
                  <div class="message-wrap">
                    <div class="message message-other float-left">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </div>
                  </div>


                                      <!--message block -->
                                      <div class="message-wrap">
                                        <div class="message">
                                          مرحبا بك 
                                        </div>
                                      </div>
                              <!--message block -->
                                      <div class="message-wrap">
                                        <div class="message message-other float-left">
                                          مرحبا بك 
                                        </div>
                                      </div>
                  
                              <!--message block -->
                                      <div class="message-wrap">
                                        <div class="message">
                                          مرحبا بك 
                                        </div>
                                      </div>
                              <!--message block -->
                                      <div class="message-wrap">
                                        <div class="message message-other float-left">
                                          هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        </div>
                                      </div>


                                                          <!--message block -->
                  <div class="message-wrap">
                    <div class="message">
                      مرحبا بك 
                    </div>
                  </div>
          <!--message block -->
                  <div class="message-wrap">
                    <div class="message message-other float-left">
                      مرحبا بك 
                    </div>
                  </div>

          <!--message block -->
                  <div class="message-wrap">
                    <div class="message">
                      مرحبا بك 
                    </div>
                  </div>
          <!--message block -->
                  <div class="message-wrap">
                    <div class="message message-other float-left">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </div>
                  </div>

                  

                </div>
                  <!--messages write here-->
                  <div class="send-message position-fixed col-lg-9 justify-content-around align-items-end d-flex px-3">
                    <button class='btn btn-primary rounded-circle'><i class='fas fa-paper-plane'></i></button>
                    <div contenteditable="true" class='write'> </div>
                    <div class='send-upload btn'>
                      <label for='upload'><i class='fas fa-cloud-upload-alt'></i></label>
                      <input type='file' hidden id="upload">
                    </div>
                </div>

              </div>

              <!--messanger lists -->
              <div class="col-lg-3 messanger-lists text-left">
                <ul class="list-unstyled messanger-list">
                  <li class='text-right px-3 d-lg-none'>
                      <button class='btn close-menu pt-2 px-0 pb-0'> <i class='fas fa-times fa-2x'></i></button>
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                                      <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                  <li class='d-flex messanger-item justify-content-end align-items-center'>
                    <h2 class='name ml-2'>Hassan Ahmed</h2>
                    <img src='https://placeimg.com/50/50/any?1' class='rounded-circle' width='50' />
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
  </section>
    `;

    $(document).on("click", '.chat-btn', function () {
        $("body").append(chat);
    })
    $(document).on("click", ".chat-toggler", function () {
        $(".messanger-lists").toggleClass("open");
    });

    $(document).on("click", ".close-menu ", function () {
        $(".messanger-lists").removeClass("open");
    });
    $(document).on("click", ".messanger-lists", function (a) {
        if($(this).hasClass("open")) {
            if(a.target.classList.contains("messanger-lists")) {
                $(".messanger-lists").removeClass("open");
            }
        }
        
    });
});