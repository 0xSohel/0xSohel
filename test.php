<div class="row">
   <div class="inspection-column col-lg-8 col-md-12 col-sm-12">
      <div class="inner-column">
         <div class="review-sec">
            <h4 class="title">No found any review yet.</h4>
         </div>
         <form class="m-2" action="https://carssafari.co.uk/process/" method="POST" id="reviewForm">
            <div class="Reply-sec">
               <h6 class="title">Leave a Reply</h6>
               <div class="text">Your email address will not be published. Required fields are marked *</div>
               <div class="right-box">
                  <div class="rating-list two">
                     <!-- Comfort -->
                     <div class="list-box">
                        <span>Comfort</span>
                        <ul class="list" data-name="comfort">
                           <input type="hidden" name="comfort" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                     <!-- Exterior Styling -->
                     <div class="list-box">
                        <span>Exterior Styling</span>
                        <ul class="list" data-name="exterior_styling">
                           <input type="hidden" name="exterior_styling" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                     <!-- Performance -->
                     <div class="list-box">
                        <span>Performance</span>
                        <ul class="list" data-name="performance">
                           <input type="hidden" name="performance" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                  </div>
                  <div class="rating-list">
                     <!-- Interior Design -->
                     <div class="list-box">
                        <span>Interior Design</span>
                        <ul class="list" data-name="interior_design">
                           <input type="hidden" name="interior_design" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                     <!-- Value For The Money -->
                     <div class="list-box">
                        <span>Value For The Money</span>
                        <ul class="list" data-name="value_for_money">
                           <input type="hidden" name="value_for_money" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                     <!-- Reliability -->
                     <div class="list-box">
                        <span>Reliability</span>
                        <ul class="list" data-name="reliability">
                           <input type="hidden" name="reliability" class="ratingValue">
                           <li><i class="fa fa-star" data-value="1"></i></li>
                           <li><i class="fa fa-star" data-value="2"></i></li>
                           <li><i class="fa fa-star" data-value="3"></i></li>
                           <li><i class="fa fa-star" data-value="4"></i></li>
                           <li><i class="fa fa-star" data-value="5"></i></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="form_boxes">
                     <label>Name</label>
                     <input type="text" name="name" required="" placeholder="John Doe">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form_boxes">
                     <label>Email</label>
                     <input type="email" name="email" required="" placeholder="mail@domain.com">
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="form_boxes">
                     <label>Title</label>
                     <input type="text" name="title" required="" placeholder="Good Cars">
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="form_boxes v2">
                     <label>Comment</label>
                     <textarea id="textarea" type="text" name="description" placeholder="Description" required=""></textarea>
                  </div>
               </div>
               <div class="col-lg-12">
                  <input type="hidden" name="vehicle_id" value="179">
                  <input type="hidden" name="form_type" value="reviewVehicle">
                  <div class="form-submit">
                     <button onclick="submitForm(this)" type="submit" class="theme-btn">
                        Post Comment 
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                           <g clip-path="url(#clip0_711_3214)">
                              <path d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z" fill="white"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_711_3214">
                                 <rect width="14" height="14" fill="white"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>