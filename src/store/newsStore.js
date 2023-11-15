export const useNewsStore = defineStore("news", {
  state: () => ({
    news: [
      {
        id: 1,
        title: "Sample blog post",
        releaseDate: "January 1, 2021",
        author: "Mark",
        content: ".....",
      },
      {
        id: 2,
        title: "House passes short-term bill to avert government shutdown",
        releaseDate: "January 1, 2021",
        author: "Mark",
        content:
          "The bill now goes to the Senate just days before the deadline, without any of the deep spending cuts conservative Republicans had sought.",
      },
    ],
  }),
});
