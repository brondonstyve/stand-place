
  <div id="frame">
      <div id="sidepanel">
          <div id="profile">
              <div class="wrap">
                  <img id="profile-img" src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif " class="online" alt="" />
                  <p>{{ $utilisateur->prenom }}</p>
                  <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>

              </div>
          </div>
          <div id="search">
              <label for=""><img src="images/admin/rechercher.png" width="15px"></label>
              <input type="text" id="contact" placeholder="chercher un contact..." />
          </div>

          <div id="result-contact" class="centre">

          </div>
          <div id="contacts">
              <ul>
                  <li class="contact">
                      <div class="wrap"  class="contacts">
                          <span class="contact-status online"></span>
                          <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif " alt="" />
                          <div class="meta">
                              <p class="name">{{ $utilisateur->prenom }}</p>
                              <p class="preview">Dernier message.</p>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
          <div id="bottom-bar">
              <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Ajouter un contact</span>+</button>
             </div>
      </div>
      <div class="content" >
          <div class="contact-profile" >
            <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif " alt="" />
              <p>Expediteur</p>
          </div>
          <div class="messages">
              <ul>
                  <li class="sent">
                      <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                      <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                  </li>
                  <li class="replies">
                      <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                      <p>When you're backed against the wall, break the god damn thing down.</p>
                  </li>

              </ul>
          </div>
          <div class="message-input">
              <div class="wrap">
              <textarea placeholder="écrire votre message..." id="" cols="73" rows="2"></textarea>
              <button class="submit"><img src="images/sms2.png" class="fa fa-paper-plane"></button>
              </div>
          </div>
      </div>
  </div>
