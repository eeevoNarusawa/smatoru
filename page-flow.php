<?php get_header(); ?>

<div class="page-catch">
          <div class="page-ttl container"><span class="en-n">FLOW</span><br>業務フロー</div>
        </div><!-- catch -->


        <div class="pg-func-copy">4つのフローで簡単作成</div>
        <ul class="flow">
            <li><img src="<?php bloginfo('template_directory'); ?>/images/image_add.svg" ><p>アルバム作成</p></li>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/image_share.svg" ><p>アルバム共有</p></li>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/image_upload.svg" ><p>写真アップロード</p></li>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/image_download.svg" ><p>アルバムダウンロード</p></li>
        </ul>

        <div class="pg-func-conts">
          <div class="pg-func-flex">
            <div class="pg-func-img sp-pg-func-img"><img src="<?php bloginfo('template_directory'); ?>/images/img_flow01.jpg"></div>
            <div class="pg-func-cont">
                <div class="pg-func-ttl">
                  <h2>アルバム作成</h2>
                  <p class="en-n">Create album</p>
                </div>
              <div class="pg-func-cont-ttl">直接入力、ファイルアップロードに対応</div>
              <div class="pg-func-cont-desc">
                アルバム作成画面では、アルバムの内容を直接入力してアルバムを作ることが可能です。また、あらかじめ準備しておいたテキストファイルをもとにアルバム作成することも可能です。
              </div>
              <div class="pg-point">
                    <div class="pg-point-back en-n">POINT</div>
                    <div class="pg-point-text">アップロード用のファイルは.txt形式でアップロードしてください。</div>
              </div>
            </div>
          </div>
        </div>
       <div class="pg-func-conts">
         <div class="pg-func-flex">
           <div class="pg-func-cont">
               <div class="pg-func-ttl">
                 <h2>アルバム共有</h2>
                 <p class="en-n">Album sharing</p>
               </div>
             <div class="pg-func-cont-ttl">管理者とゲストの権限付与が可能</div>
             <div class="pg-func-cont-desc">
               管理者権限が付与されたユーザはアルバム内でのすべての操作が可能になります。主な機能としてはアルバム名の変更、すべての投稿写真の編集・削除、アルバムデータのダウンロードなどがあります。ゲストユーザに関してはアルバム内で写真の投稿が可能になります。また自身でアップロードした写真については編集・削除が可能になります。
             </div>
             <div class="pg-point">
                   <div class="pg-point-back en-n">POINT</div>
                   <div class="pg-point-text">アルバム内の写真が見られるのは招待されたメンバーのみです</div>
             </div>
           </div>
                      <div class="pg-func-img sp-pg-func-img"><img src="<?php bloginfo('template_directory'); ?>/images/img_flow02.jpg"></div>

         </div>
       </div>
        <div class="pg-func-conts">
          <div class="pg-func-flex">
            <div class="pg-func-img sp-pg-func-img"><img src="<?php bloginfo('template_directory'); ?>/images/img_flow03.jpg"></div>
            <div class="pg-func-cont">
                <div class="pg-func-ttl">
                  <h2>写真アップロード</h2>
                  <p class="en-n">Photo upload</p>
                </div>
              <div class="pg-func-cont-ttl">保存ファイルと撮影ファイルの両方に対応</div>
              <div class="pg-func-cont-desc">
                スマートフォンからの写真アップロードは直接写真を撮影してアップロードする方法と、スマートフォン内に保存済みの写真選択する方法の2種類対応しております。
                PCからの操作の場合は保存済みの写真をドラッグアンドドロップでアップロードすることが可能です。
              </div>
              <div class="pg-point">
                    <div class="pg-point-back en-n">POINT</div>
                    <div class="pg-point-text">ネット環境につながらない現場でも後で写真のアップロードが可能！</div>
              </div>
            </div>
          </div>
        </div>
        <div class="pg-func-conts pg-func-conts-last">
         <div class="pg-func-flex">
           <div class="pg-func-cont">
               <div class="pg-func-ttl">
                 <h2>アルバムダウンロード</h2>
                 <p class="en-n">Photo upload</p>
               </div>
             <div class="pg-func-cont-ttl">PDFとZIPファイルに対応</div>
             <div class="pg-func-cont-desc">
               作成済みのアルバムをPDFとZIPファイルにてダウンロードすることが可能です。
             </div>
             <div class="pg-point">
                   <div class="pg-point-back en-n">POINT</div>
                   <div class="pg-point-text">ZIPファイルをダウンロードすると、アルバム名、工程名がそのままファイル名に！後々の作業が楽に行なえます。</div>
             </div>
           </div>
                      <div class="pg-func-img sp-pg-func-img"><img src="<?php bloginfo('template_directory'); ?>/images/img_flow04.jpg"></div>
         </div>
       </div>
		
		
		<div class="btn"><a href="/function-list/"><div class="function-more2">機能一覧<span>＞</span></div></a></div>




<?php get_footer(); ?>