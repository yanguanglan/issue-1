<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Ips;

#curl
function getJONP($url, $proxy_ip = null, $header = null)
{
    if (empty($url)) {
        return false;
    }
    // 初始化
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    // 启用时会将服务器服务器返回的“Location:”放在header中递归的返回给服务器
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // 设置 HTTP USERAGENT
    //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:5.0.1) Gecko/20100101 Firefox/5.0.1 FirePHP/0.5');
    // 设置curl允许执行的最长秒数
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, '5');
    curl_setopt($ch, CURLOPT_TIMEOUT, '10');
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    // 设置客户端是否支持 gzip压缩
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if($proxy_ip){
        curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
    }
    if($header){
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36",
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    if ($output === false) {
        return false;
    }
    return $output;
}

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function () {
            //国内高匿名
            $data = getJONP('http://www.xicidaili.com/nn/');
            preg_match_all("/<td[^>]*>(\s*)(.*)(\s*)<\/td>/U", $data, $matches);
            $ips = array_chunk($matches[2], 8);

            foreach ($ips as $ip) {
                $app = \App\Ips::where('ip2', $ip[1])->where('ip3', $ip[2])->where('ip9', $ip[7])->first();
                if($app){
                    continue;
                }
                \App\Ips::create([
                    'ip1'=> $ip[0],
                    'ip2'=> $ip[1],
                    'ip3'=> $ip[2],
                    'ip4'=> $ip[3],
                    'ip5'=> $ip[4],
                    'ip6'=> $ip[5],
                    'ip7'=> $ip[6],
                    'ip8'=> 'guoneinimingdailiip',
                    'ip9'=> $ip[7],
                ]);
            }

            //国内普通
            $data = getJONP('http://www.xicidaili.com/nt/');
            preg_match_all("/<td[^>]*>(\s*)(.*)(\s*)<\/td>/U", $data, $matches);
            $ips = array_chunk($matches[2], 8);

            foreach ($ips as $ip) {
                $app = \App\Ips::where('ip2', $ip[1])->where('ip3', $ip[2])->where('ip9', $ip[7])->first();
                if($app){
                    continue;
                }

                \App\Ips::create([
                    'ip1'=> $ip[0],
                    'ip2'=> $ip[1],
                    'ip3'=> $ip[2],
                    'ip4'=> $ip[3],
                    'ip5'=> $ip[4],
                    'ip6'=> $ip[5],
                    'ip7'=> $ip[6],
                    'ip8'=> 'guoneidailiip',
                    'ip9'=> $ip[7],
                ]);
            }

            //国外高匿名
            $data = getJONP('http://www.xicidaili.com/wn/');
            preg_match_all("/<td[^>]*>(\s*)(.*)(\s*)<\/td>/U", $data, $matches);
            $ips = array_chunk($matches[2], 8);

            foreach ($ips as $ip) {
                $app = \App\Ips::where('ip2', $ip[1])->where('ip3', $ip[2])->where('ip9', $ip[7])->first();
                if($app){
                    continue;
                }

                \App\Ips::create([
                    'ip1'=> $ip[0],
                    'ip2'=> $ip[1],
                    'ip3'=> $ip[2],
                    'ip4'=> $ip[3],
                    'ip5'=> $ip[4],
                    'ip6'=> $ip[5],
                    'ip7'=> $ip[6],
                    'ip8'=> 'guonwainimingdailiip',
                    'ip9'=> $ip[7],
                ]);
            }

            //国内普通
            $data = getJONP('http://www.xicidaili.com/wt/');
            preg_match_all("/<td[^>]*>(\s*)(.*)(\s*)<\/td>/U", $data, $matches);
            $ips = array_chunk($matches[2], 8);

            foreach ($ips as $ip) {
                $app = \App\Ips::where('ip2', $ip[1])->where('ip3', $ip[2])->where('ip9', $ip[7])->first();
                if($app){
                    continue;
                }

                \App\Ips::create([
                    'ip1'=> $ip[0],
                    'ip2'=> $ip[1],
                    'ip3'=> $ip[2],
                    'ip4'=> $ip[3],
                    'ip5'=> $ip[4],
                    'ip6'=> $ip[5],
                    'ip7'=> $ip[6],
                    'ip8'=> 'guoweidailiip',
                    'ip9'=> $ip[7],
                ]);
            }

            //qq代理
            $data = getJONP('http://www.xicidaili.com/qq/');
            preg_match_all("/<td[^>]*>(\s*)(.*)(\s*)<\/td>/U", $data, $matches);
            $ips = array_chunk($matches[2], 8);

            foreach ($ips as $ip) {
                $app = \App\Ips::where('ip2', $ip[1])->where('ip3', $ip[2])->where('ip9', $ip[7])->first();
                if($app){
                    continue;
                }

                \App\Ips::create([
                    'ip1'=> $ip[0],
                    'ip2'=> $ip[1],
                    'ip3'=> $ip[2],
                    'ip4'=> $ip[3],
                    'ip5'=> $ip[4],
                    'ip6'=> $ip[5],
                    'ip7'=> $ip[6],
                    'ip8'=> 'qqdailiip',
                    'ip9'=> $ip[7],
                ]);
            }

            file_put_contents('log.txt', time());
        })->everyTenMinutes();
    }
}
