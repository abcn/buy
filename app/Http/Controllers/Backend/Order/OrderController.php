<?php
/**
 * Created by PhpStorm.
 * User: zhouhaotong
 * Date: 16/1/25
 * Time: 下午3:36
 */

namespace App\Http\Controllers\Backend\Order;


use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\Order\OrderProduct;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    protected $request;
    protected $orderModel;
    public function __construct(Request $request,Order $orderModel)
    {
        $this->request      = $request;
        $this->orderModel   = $orderModel;
    }

    public function index()
    {
        return view('backend.order.index');
    }

    public function create()
    {

    }

    public function store()
    {
        //上传文件
        //$file = $this->request->file('orderExcel');

        $orderExcel = Excel::selectSheets('Sheet1')->load(public_path('uploads/excel/70.xls'), function ($reader){
            $reader->take(10);
        });
        $results = $orderExcel->toArray();
//        dd($results);
        foreach($results as $result){
            //TODO
            //查询是否已经存在

            //TODO 判断序号是否为null 不为null存入数据库 如果为null 查找子序号所指向序号是否存在
            if($result['序号'] != null){
                $order = new Order();
                $order->excel_id = (int)$result['序号'];
                $order->fw_number = $result['国外运单号'];
                $order->name = $result['姓名'];
                $order->mobile = $result['电话'];
                $order->address = $result['地址'];
                $order->zip_code = $result['邮编'];
                $order->weight = $result['重量'];
                $order->id_number = $result['身份证号'];
//                if(!$order->save()){
//                    return 'false';
//                }
                //存入订单产品
                $product = new OrderProduct();
                $product->order_id = $order->id;
                $product->name = $result['品名'];
                $product->count = $result['数量'];
                //$product->save();
            }else{
                var_dump((int)$result['子序号']);
                //存入子订单
                $order = Order::where('excel_id',(int)$result['子序号'])->first();
                //存入订单产品
                $product = new OrderProduct();
                $product->order_id = $order->id;
                $product->name = $result['品名'];
                $product->count = $result['数量'];
                //$product->save();
            }
        }

    }
}