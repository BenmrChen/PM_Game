[English](./README.md) | 繁體中文

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

<h1 align="center">菜鳥PM養成計畫</h1>

## 前言
這是一個剛剛學寫程式兩週的小菜鳥，絞盡腦汁寫成的小遊戲 -- 菜鳥PM養成計畫!


## 自介
### 背景
- 姓名: 陳明仁 (Ben Chen)
- 學歷: 國立台灣大學國際企業學系畢(非理工科系!)
- 工作資歷: 曾任鴻海、LG化學、Garmin擔務生管、財會、PM等職位(非相關工作!)

### 寫程式經驗
- 全職投入: 兩週
- 其他: 購買過Hahow、Alpha Camp等線上課程，但成效不彰


## 小遊戲架購
### 初始想法
- 創造以3個角色為主角、為期3天、完成至少三個事件、以致有3種結局的PM養成小遊戲
- 結局會因為玩家選的角色及對事件的選擇而有所不同，主要以3種指標及角色加權做評價
     - 指標
          - 體力
          - PM技能
          - 聲望
     - 加權分數隨角色不同而各異
     - 分數越高，結局越好
     - E.g. 若玩家選擇「初心者男」作為主角，其聲望加權將會是0.9。在Day 1若玩家選擇visit_all，其聲望值變化將會是 0.9*60= 54，結果值是 0+54= 54
     - 圖示
     ![](https://lh3.googleusercontent.com/tFD4aB4gt-aOvZd8IR6czL4wQshyRRiHtFbhSVFRpVAfkEDe6mt5H8mTPBH2D9vDftCpjz1lfIJiOooMB0ufU-01axVLd29mnmmNZtMKREiNFu3K1k4gIbpOxdhrtzylHODNWfSz=w2400) 

### 實作
- 以1個角色、1個主要事件、1個隨機事項及1種結結當作MVP執行
- 其他與初始想法相同
- 圖示
![](https://lh3.googleusercontent.com/qwvt_SITl7fOkadHTlMMKd6pvq0TdzKTP9mYcqbK7kS4G2uWXxLJ6aDZGdhU2qwaihl_3SkYVWFcs2-sBgK6vKcCSKHbm9D0ue-w0UyB8gAg2L5aduri20ey7-C8Z8gg7hRS8Msg=w2400)
     
### 詳細流程&&決策樹
- 使用到之檔案名及決策樹如下
- 圖示
![](https://lh3.googleusercontent.com/wdagC9t4zusL46MZ0P0AJr9oP1I2s52Q0MA-_2Lc17FltEuUKWrrB3e9md35JcaZDpSfO54zJ02CmkMVAmAxQARSy-CoY7tiI0I1bPk2sGujqxq_6LIB2cTngQFRG2lV5dni0aZh=w2400)

## 如何開始
- 請使用瀏覽器將"index_start.php"開啟，遊戲即開始
- 由於本專案仍為MVP，在各決策選項中，請務必選項第一項(最上面的選項)，其他選項尚在開發中，敬請期待
- p.s. 見到以下畫面即代表您已成功進入遊戲
![](https://lh3.googleusercontent.com/yQkzGsAMrR38lWr7IN5WARbDqEGDrapYZ1vCee9ye4erv3dALjGnxTKKWsUgzJVlUzjUuwGtXzEjWusH6e6PDSzi6PzkU5M9PdTxoEl4xLSrJOG0w3_B7cm--AQl3lpzzXzm5At4=w2400)


