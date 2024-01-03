                <div class="swiper-slide">
                   
                   <div class="PostesOnecoucher"></div>

                   
                   <!-- Propostion_modification -->
                    <div class="carterTargetFrinds">
                            <div class="divText">
                              <span>Suggestions pour vous</span>
                              <span>Voir plus <i class="fa-solid fa-caret-down"></i></span>
                            </div>
                            <div class="contaneurPropositions">
                                <div class="carterFriendsPropo">
                                <div class="swiper mySwiper PropositionAmisdesAmias">
                                    <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="photoProfileUser"></div>
                                        <div class="namesFriendPropo">
                                            <h3>Jean-luc</h3>
                                            <span>3 amis en commun</span>
                                        </div>
                                        <div class="BoutonsRetoure user">Ajouter <i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="photoProfileUser"></div>
                                        <div class="namesFriendPropo">
                                            <h3>Jean-luc</h3>
                                            <span>3 amis en commun</span>
                                        </div>
                                        <div class="BoutonsRetoure user">Ajouter <i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="photoProfileUser"></div>
                                        <div class="namesFriendPropo">
                                            <h3>Jean-luc</h3>
                                            <span>3 amis en commun</span>
                                        </div>
                                        <div class="BoutonsRetoure user">Ajouter <i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="photoProfileUser"></div>
                                        <div class="namesFriendPropo">
                                            <h3>Jean-luc</h3>
                                            <span>3 amis en commun</span>
                                        </div>
                                        <div class="BoutonsRetoure user">Ajouter <i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <!-- Propostion_modification -->
                    <div class="textEplaza">Bonjour Jean-Luc, David est également ami avec ces personnes. Connaissez-vous l'une d'entre elles ?</div>
                    <div class="swiper mySwiper profilephotoSuggestion">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide profilePhoto">
                            <div class="headerSide">
                              <div class="divText">
                                <div class="identiteUse">
                                    <div class="photoamis">
                                          <img src="../images/1696508580709.jpg"/>
                                        </div>
                                        <div class="nomamis">
                                          <h3>Jean-luc kashi...</h3>
                                          <p><small>86 ami(e)s en commun </small></p>
                                        </div>
                                    </div>
                                    <span>suivre</span>
                                </div>
                              </div>
                            </div>
                          <div class="swiper-slide profilePhoto">
                            <div class="headerSide">
                              <div class="divText">
                                <div class="identiteUse">
                                    <div class="photoamis">
                                          <img src="../images/1696508580709.jpg"/>
                                        </div>
                                        <div class="nomamis">
                                          <h3>Jean-luc kashi...</h3>
                                          <p><small>86 ami(e)s en commun </small></p>
                                        </div>
                                    </div>
                                    <span>suivre</span>
                                </div>
                              </div>
                            </div>
                          <div class="swiper-slide profilePhoto">
                            <div class="headerSide">
                              <div class="divText">
                                <div class="identiteUse">
                                    <div class="photoamis">
                                          <img src="../images/1696508580709.jpg"/>
                                        </div>
                                        <div class="nomamis">
                                          <h3>Jean-luc kashi...</h3>
                                          <p><small>86 ami(e)s en commun </small></p>
                                        </div>
                                    </div>
                                    <span>suivre</span>
                                </div>
                              </div>
                            </div>

                          </div>
                        <div class="swiper-pagination"></div>
                      </div>
                    <!-- suggestion PhotoUsers -->
                   <div class="swiper mySwiper other onlyScroll">
                   <hr class="ligne">
                      <div class="divText"><span>Suggestions pour vous</span><span>Voir plus <i class="fa-solid fa-caret-down"></i></span></div>
                     <div class="swiper-wrapper containerFriesProposition">
                         <!-- Friends -->
                         <?php
                         global $my_sexe;
                         global $my_id;
                         $USERS_ROWS_FIENDS = getRandomNonFriendsList($my_id, $my_sexe);
                        foreach($USERS_ROWS_FIENDS as $USERS_FRIENDS)
                         {
                           include("Int_Friends_1.php");
                         }
                         ?>
                     </div>
                   </div>
                   <div class="textEplaza">ePlaza est un lieu virtuel de promotion des produits avec une large diffusion dans l'écosystème NewaRnet</div>
                   <div class="swiper mySwiper other onlyScroll cartePage propositions">
                     <div class="swiper-wrapper">
                         <!-- Eplaza here -->
                   </div>
                   </div>
                 </div>
                 <!-- videosHome -->
                 <div class="swiper-slide">
                  videoSession
                 </div>
                 <!-- Statu -->
                   <div class="swiper-slide">
                     <div class="swiper mySwiper status">
                         <div class="swiper-wrapper ScrollPart">
                           <div class="swiper-slide partyOneSatus">
                              <!-- stoys_friends -->
                             <div class="leftnav status"> <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher une Statut" oninput="RecherCherNewaRnaute(event)"></div>
                                 <!-- stories proipositions -->
                           </div>
                           <div class="swiper-slide">
                             <div class="carterPostSatut">
                               <div class="headerSatatus">
                                 <div class="" onclick="BackSatutus()"><i class="fa-solid fa-arrow-left"></i></div>
                                 <div class="carterUsermessage">
                                   <img class="userphoto statut" src="../images/785054-ecommerce-istock-020119-removebg-preview.png" alt=""></div>
                                 <div class="nameUserconversation">
                                     <h3>Jean-luc kashindihj</h3>
                                     <p>12 vues</p>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                     </div>
                   </div>
                 <!-- books -->
                 <div class="swiper-slide boook">
                   <div class="swiper mySwiper other">
                     <div class="gridPhoto">
                       <!-- Livres here -->
                     </div>
                     </div>
                 </div>
                 <!-- Post -->
                 <div class="swiper-slide posteSide">
                   <div class="cartetPosteCreation">
                       <div class="headerPatiesPoste">
                         <span><i class="fa-solid fa-arrow-left" onclick="RetunBackCreatePoste()"></i> Creation de poste</span>
                       </div>
                       <form method="post" class="bottomSidepartiePoste">
                           <div class="leftnav postSession"> 
                             <input type="text" name="poste" id=""placeholder="Écrivez ce que vous désirez poster" oninput="PosteChamps(event)">
                         </div>
                           <div class="swiper mySwiper other posteMenu">
                             <div class="menuHomeChoix">
                               <div class="optionHome active" onclick="PosteFile(event)" id="image">Photo<i class="fa-solid fa-image"></i></div>
                               <div class="optionHome"onclick="PosteFile(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                               <div class="optionHome"onclick="PosteFile(event)" id="document">Document<i class="fa-solid fa-file-pdf"></i></div>
                             </div>
                           <div class="swiper-wrapper homeSessionPost slidpost">
                             <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageDisplay')">
                             <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplay(this,event, 'videoDisplay')">
                             <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="updateLabelAndDisplay(this,event, 'documentDisplay')"> 
                             <div class="swiper-slide">
                             <label for="imagePost" id="imageDisplay" class="carterPostStory poste">
                                 <i class="fa-solid fa-image"></i>
                                 <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                               </label>
                             </div>
                               <div class="swiper-slide">
                               <label for="videomessage" id="videoDisplay" class="carterPostStory poste">
                                 <i class="fa-solid fa-clapperboard"></i>
                                 <p>Cliquez pour sélectionner une video</p>
                               </label>
                             </div>
                               <div class="swiper-slide">
                               <label for="documents" id="documentDisplay" class="carterPostStory poste">
                                 <i class="fa-solid fa-file-pdf"></i>
                                 <p>Cliquez pour sélectionner une Document</p>
                               </label>
                             </div>
                           </div>
                         </div>
                           <div class="text_demos">Merci de prendre le temps de sélectionner attentivement le niveau d'intégrité approprié pour ce poste.</div>
                           <div class="InputDouble">
                             <select name="integrite" class="containeurInputStyle integrite">
                             <option value="amis">Mes ami(e)s</option>
                               <option value="moi">Moi seule</option>
                               <option value="tous">À tous les NewaRnautes</option>
                             </select>                                                           
                             <div class="containeurInputStyle poste publication" onclick="poster(event)">Publier <i class="fa-solid fa-paper-plane"></i></div>
                         </div>
                       </form>
                   </div>
                 </div>
             </div>