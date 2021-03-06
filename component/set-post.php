<h3>文章图片设置</h3>

<div class="set-plane">
    <div class="set-title">
        图片圆角
    </div>
    <div class="set-object">
        <el-switch
            v-model="set.post.imgradius"
            :active-value="1"
            :inactive-value="0"
        >
        </el-switch>
    </div>
</div>

<div class="set-plane">
    <div class="set-title">
        图片阴影
    </div>
    <div class="set-object">
        <el-switch
                v-model="set.post.imgshadow"
                :active-value="1"
                :inactive-value="0"
        >
        </el-switch>
    </div>
</div>
<h3>文章版权</h3>
<div class="set-plane set-plane-nocenter">
    <div class="set-title">
        版权内容(支持HTML)
    </div>
    <div class="set-object">
        <el-input
                type="textarea"
                :rows="5"
                placeholder="请输入内容"
                v-model="set.post.copyright">
        </el-input>
    </div>
</div>

<div class="set-plane">
    <div class="set-title">
    </div>
    <div class="set-object">
       可用变量
        <p><#username#>:当前文章用户名</p>
        <p><#url#>:当前文章地址</p>
        <p>换行请使用html代码:&lt;br&gt;&nbsp;&nbsp;
    </div>
</div>