<<<<<<< HEAD
// 爬取
package main

import (
  "net/http"
  "log"
  "github.com/Puerkitobit"
)

func BaiduHotSearch() {
  res, err := http.Get(
    "http://www.baidu.com")
  if err != nil {
    log.Fatal(err)
  }
  defer res.Body.Close() // ?
  if res.StatusCode != 200 {
    log.Fatalf("status code error:%d %s",
  res.StatusCode, res.Status)
  }
  
  doc, err :=
  	goquery.NewDocumentFromReader(
		res.Body)
	if err != nil {
		log.Fatal(err)
	}

	doc.Find(".s-hotsearch-content .hotsearch-item").Each(func(i int, s *goquery.Selection) {
    content := s.Find(".title-content-title").Text()
    fmt.Printf("%d: %s\n", i, content)
  })
}

func main() {
  BaiduHotSearch() // 函数模块
=======
// 爬取
package main

import (
  "net/http"
  "log"
  "github.com/Puerkitobit"
)

func BaiduHotSearch() {
  res, err := http.Get(
    "http://www.baidu.com")
  if err != nil {
    log.Fatal(err)
  }
  defer res.Body.Close() // ?
  if res.StatusCode != 200 {
    log.Fatalf("status code error:%d %s",
  res.StatusCode, res.Status)
  }
  
  doc, err :=
  	goquery.NewDocumentFromReader(
		res.Body)
	if err != nil {
		log.Fatal(err)
	}

	doc.Find(".s-hotsearch-content .hotsearch-item").Each(func(i int, s *goquery.Selection) {
    content := s.Find(".title-content-title").Text()
    fmt.Printf("%d: %s\n", i, content)
  })
}

func main() {
  BaiduHotSearch() // 函数模块
>>>>>>> 8c2f71af13b65734be4da0e35ac4852cd248ed77
}