CREATE TABLE `akkAdminUser` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `uname` varchar(255),
  `pwd` varchar(255),
  `name` varchar(255),
  `class` int,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `akkSelect` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `cate` varchar(255),
  `ord` int
)

CREATE TABLE `akkViews` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `board` int,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE `akkARs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `ARs` text,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
)

INSERT INTO akkSelect( name, cate, ord )
  VALUES
    ( '사용자', 'class', 1),
    ( '대표', 'class', 2),
    ( '관리자', 'class', 3)
    ( '서울특별시', 'region', 1),
    ( '부산광역시', 'region', 2),
    ( '대구광역시', 'region', 3),
    ( '인천광역시', 'region', 4),
    ( '광주광역시', 'region', 5),
    ( '대전광역시', 'region', 6),
    ( '울산광역시', 'region', 7),
    ( '세종특별자치시', 'region', 8),
    ( '경기도', 'region', 9),
    ( '강원도', 'region', 10),
    ( '충청북도', 'region', 11),
    ( '충청남도', 'region', 12),
    ( '전라북도', 'region', 13),
    ( '전라남도', 'region', 14),
    ( '경상북도', 'region', 15),
    ( '경상남도', 'region', 16),
    ( '제주특별자치도', 'region', 17)

INSERT INTO akkAdminUser( uname, pwd, name, class )
  VALUES
    ( 'akkimAdmin', password('akkimWood'), '아낌없이주는나무', '1'),
    ( 'ninano', password('ninano60!'), '니나노컴퍼니', '3')

ALTER TABLE manageAR ADD COLUMN nickName varchar(255)
ALTER TABLE manageAR ADD COLUMN manager varchar(255)
ALTER TABLE manageAR ADD COLUMN address varchar(255)
ALTER TABLE manageAR ADD COLUMN contact varchar(255)
ALTER TABLE manageAR ADD COLUMN link varchar(255)
ALTER TABLE manageAR ADD COLUMN chk int
ALTER TABLE manageAR ADD COLUMN contents varchar(255)

INSERT INTO akkARs( name, ARs, mode )
  VALUES
    ('수족관', '<section>
          <h2 class="hidden">바다AR</h2>
          <div class="sectionImg">
              <a class="clickSound" href="javascript:setTimeout(()=>{window.location = \'intent://ninanobiz.com/babylon/dev/aqua/index.html#Intent;scheme=https;package=com.android.chrome;end\' },770);"><img src="css/images/aquaBanner.png" alt="/"></a>
          </div>
          <p class="sec_title">바다</p>
          <span class="desc">바다AR</span>
      </section>', 1),
    ('열대어', '<section>
          <h2 class="hidden">열대어AR</h2>
          <div class="sectionImg">
              <a class="clickSound" href="javascript:setTimeout(()=>{window.location = \'intent://ninanobiz.com/babylon/dev/tropical/index.html#Intent;scheme=https;package=com.android.chrome;end\' },770);"><img src="css/images/tropicalBanner.jpg" alt="/"></a>
          </div>
          <p class="sec_title">열대어</p>
          <span class="desc">열대어AR</span>
      </section>', 1),
    ('공룡', '<section>
          <h2 class="hidden">공룡AR</h2>
          <div class="sectionImg">
              <a class="clickSound" href="javascript:setTimeout(()=>{window.location = \'intent://ninanobiz.com/babylon/dev/jurassic/index.html#Intent;scheme=https;package=com.android.chrome;end\' },770);"><img src="css/images/dinosBanner.png" alt="/"></a>
          </div>
          <p class="sec_title">공룡</p>
          <span class="desc">공룡AR</span>
      </section>', 1),
    ('호랑이', '<section>
          <h2 class="hidden">호랑이</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Tiger_Y_Clip_01_L.glb&mode=ar_only&title=호랑이&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/zoo.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/tigerY.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">아기 호랑이</p>
          <span class="desc">동물AR</span>
      </section>', 2),
      ('표범', '<section>
          <h2 class="hidden">표범</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Leopard_M_Clip_01_L.glb&mode=ar_only&title=표범&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/zoo.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;"><img
                      src="css/images/AR_2.jpg" alt="/"></a>
          </div>
          <p class="sec_title">아빠 표범</p>
          <span class="desc">동물AR</span>
      </section>', 2),
      ('사자', '<section>
          <h2 class="hidden">사자</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Lion_M_03_L.glb&mode=ar_only&title=사자&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/Safari-mix.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;"><img
                      src="css/images/lionM.jpg" alt="/"></a>
          </div>
          <p class="sec_title">아빠 사자</p>
          <span class="desc">동물AR</span>
      </section>', 2),
      ('사슴', '<section>
          <h2 class="hidden">사슴</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/RedDeer_M_Clip_01_L.glb&mode=ar_only&title=사슴&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/zoo.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/deerM.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">아빠 사슴</p>
          <span class="desc">동물AR</span>
      </section>', 2),
      ('스테고사우루스', '<section>
          <h2 class="hidden">스테고사우르스</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Stegosaurus_L.glb&mode=ar_only&title=스테고사우르스&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/dinos.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/stegosaurus.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">스테고사우르스</p>
          <span class="desc">공룡AR</span>
      </section>', 2),
      ('티라노사우루스', '<section>
          <h2 class="hidden">티라노사우르스</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Tyrannosaurus_L_R1.glb&mode=ar_only&title=티라노사우르스&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/dinos.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/TyrannosaurusBanner.png" alt="/">
              </a>
          </div>
          <p class="sec_title">티라노사우르스</p>
          <span class="desc">공룡AR</span>
      </section>', 2),
      ('돌고래', '<section>
          <h2 class="hidden">돌고래</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Dolphin_L.glb&mode=ar_only&title=돌고래&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/aqua.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/dolphin.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">돌고래</p>
          <span class="desc">바다AR</span>
      </section>', 2),
      ('범고래', '<section>
          <h2 class="hidden">범고래</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Orca_L.glb&mode=ar_only&title=범고래&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/aqua.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/orca.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">범고래</p>
          <span class="desc">바다AR</span>
      </section>', 2),
      ('가오리', '<section>
          <h2 class="hidden">가오리</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Stingray_L.glb&mode=ar_only&title=가오리&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/underwater.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/stingray.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">가오리</p>
          <span class="desc">바다AR</span>
      </section>', 2),
      ('니모', '<section>
          <h2 class="hidden">니모</h2>
          <div class="sectionImg">
              <a
                  href="intent://arvr.google.com/scene-viewer/1.0?file=https://ninanobiz.com/akkim/ardev/assets/models/Nemo.glb&mode=ar_only&title=니모&sound=https://ninanobiz.com/akkim/ardev/assets/sounds/background/aquaNemo.mp3#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;S.browser_fallback_url=https://developers.google.com/ar;end;">
                  <img src="css/images/nemo.jpg" alt="/">
              </a>
          </div>
          <p class="sec_title">니모</p>
          <span class="desc">바다AR</span>
      </section>', 2)