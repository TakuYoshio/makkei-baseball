document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".article-container-tab-item");
  const articlesList = document.getElementById("articles-list");
  const paginationContainer = document.querySelector(".article-container-pagination");

  tabs.forEach(tab => {
      tab.addEventListener("click", () => {
          const categoryId = tab.getAttribute("data-category-id");

          // タブのアクティブ状態を変更
          tabs.forEach(t => t.classList.remove("active"));
          tab.classList.add("active");

          // Ajax リクエスト送信
          fetchArticles(categoryId, 1);
      });
  });

  paginationContainer.addEventListener("click", (event) => {
      const target = event.target.closest("a");
      if (!target) return;

      event.preventDefault();

      const categoryId = document.querySelector(".article-container-tab-item.active").getAttribute("data-category-id");
      const paged = parseInt(target.textContent, 10); // ページ番号を取得

      // Ajax リクエスト送信
      fetchArticles(categoryId, paged);
  });

  function fetchArticles(categoryId, paged) {
      const data = new FormData();
      data.append("action", "fetch_filtered_articles");
      data.append("category_id", categoryId === "all" ? 0 : categoryId);
      data.append("paged", paged);

      fetch(ajaxurl, {
          method: "POST",
          body: data,
      })
          .then(response => response.text())
          .then(html => {
              const parser = new DOMParser();
              const newDocument = parser.parseFromString(html, "text/html");

              // 新しい記事リストを更新
              const newArticlesList = newDocument.getElementById("articles-list");
              if (newArticlesList) {
                  articlesList.innerHTML = newArticlesList.innerHTML;
              }

              // 新しいページネーションを更新
              const newPagination = newDocument.querySelector(".article-container-pagination");
              if (newPagination) {
                  paginationContainer.innerHTML = newPagination.innerHTML;
              }
          })
          .catch(error => console.error("Error:", error));
  }
});
