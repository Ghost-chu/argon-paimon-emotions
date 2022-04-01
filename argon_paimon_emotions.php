<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Argon Paimon Emotions
 * Plugin URI:  https://www.ghostchu.com/wp%E6%8F%92%E4%BB%B6argon-%E5%91%BC%E5%91%BC%E8%A1%A8%E6%83%85%E5%8C%85/
 * Text Domain: argon-abyss-mage-emotions
 * Description: 向 Argon 主题注册来自 米游社/Lofter 的 “派蒙” 评论表情包。Lofter 画师：https://xingren886.lofter.com
 * Version:     1.0
 * Author:      Ghost_chu
 * Author URI:  https://www.ghostchu.com
 * License:     GPLv3+
 */

    function add_more_emotions_paimon($emotionList){
		$assets_dir = plugins_url( 'assets/', __FILE__ );
        array_push(
            $emotionList,
            array(
                'groupname' => '派蒙', 
                'list' => array(
					array('type' => 'sticker', 'code' => 'genpaimon-chijing', 'src' => $assets_dir . 'chijing.png'),
					array('type' => 'sticker', 'code' => 'genpaimon-chuhuoba', 'src' => $assets_dir . 'chuhuoba.png'),
					array('type' => 'sticker', 'code' => 'genpaimon-gaichifanla', 'src' => $assets_dir . 'gaichifanla.png'),
                    array('type' => 'sticker', 'code' => 'genpaimon-hengheng', 'src' => $assets_dir . 'hengheng.png'),
                    array('type' => 'sticker', 'code' => 'genpaimon-jiaogeiwoba', 'src' => $assets_dir . 'jiaogeiwoba.png'),
                    array('type' => 'sticker', 'code' => 'genpaimon-xiaoshiyizhuang', 'src' => $assets_dir . 'xiaoshiyizhuang.png'),
                    array('type' => 'sticker', 'code' => 'genpaimon-chi', 'src' => $assets_dir . 'chi.png'),
                    array('type' => 'sticker', 'code' => 'genpaimon-kan', 'src' => $assets_dir . 'kan.png'),
					array('type' => 'sticker', 'code' => 'genpaimon-miao', 'src' => $assets_dir . 'miao.png')
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions_paimon');
?>
