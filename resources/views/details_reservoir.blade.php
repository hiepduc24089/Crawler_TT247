<div class="muc_nuoc_ho">
    <div>
        <h3 class="khu_vuc_ho_title">{{$reservoir->name}}</h3>
    </div>
    <div class="muc_nuoc_update_date">
        <span>{{$reservoir->update_time}}</span>
    </div>
    <table>
        <tr>
            <td>Mực nước thượng lưu H<sub>tl</sub> (m)</td>
            <td>{{$reservoir->muc_nuoc}}</td>
        </tr>
        <tr>
            <td>Lưu lượng đến hồ Q<sub>ve</sub> (m<sup>3</sup>/s)</td>
            <td>{{$reservoir->luu_luong}}</td>
        </tr>
        <tr>
            <td>Tổng lượng xả Σ<sub>Qx</sub> (m<sup>3</sup>/s)</td>
            <td>{{$reservoir->tong_luong_xa}}</td>
        </tr>
        <tr>
            <td>Tổng lượng xả qua đập tràn Q<sub>xt</sub> (m<sup>3</sup>/s)</td>
            <td>{{$reservoir->tong_luong_xa_dap_tran}}</td>
        </tr>
        <tr>
            <td>Tổng lượng xả qua nhà máy Q<sub>xm</sub> (m<sup>3</sup>/s)</td>
            <td>{{$reservoir->tong_luong_xa_nha_may}}</td>
        </tr>
        <tr>
            <td>Số cửa xả sâu N<sub>cxd</sub> (cửa)</td>
            <td {{ $reservoir->xa_sau > 0 ? 'style=background-color:#39c3a8;' : '' }}>
                {{$reservoir->xa_sau}}
            </td>

        </tr>
        <tr>
            <td>Số cửa xả mặt N<sub>cxm</sub> (cửa)</td>
            <td {{ $reservoir->xa_mat > 0 ? 'style=background-color:#39c3a8;' : '' }}>
                {{$reservoir->xa_mat}}
            </td>
        </tr>
    </table>
</div>
<hr>
