// import axios from "axios";

// class RazorPay {
//     private data: any;
//     private rzp: any;
//     private options: any;
//     constructor() {}
//     public async createOrder(fees: string, token: string): Promise<RazorPay> {
//         let { data } = await axios.post("/create-order", {
//             amount: +fees,
//             _token: token,
//         });
//         return this;
//     }

//     public createPaymentGateway(razorPayKey: string, csrfToken: string) {
//         if (!this.data) {
//             throw new Error("createOrder() must be called first");
//         } else {
//             if (!this.data.id || !this.data.amount || !this.data.currency) {
//                 throw new Error("Invalid data structure");
//             } else {
//                 this.setOptions(razorPayKey, csrfToken);
//                 this.rzp = new Razorpay(this.options);
//             }
//         }
//     }

//     private setOptions(razorPayKey: string, csrfToken: string) {
//         this.options = {
//             key: razorPayKey,
//             amount: this.data.amount,
//             currency: this.data.currency,
//             name: "LegalSuccessIndia",
//             description: "Transaction Done",
//             image: "/images/legal_success_india_logo.png",
//             order_id: this.data.order_id, // Pass the order ID created from the server
//             handler: async (response: any) => {
//                 let res = await axios("/payment-callback", {
//                     _token: csrfToken,
//                     ...response,
//                 });
//             },
//             theme: {
//                 color: "#1d4ed8",
//             },
//         };
//     }
// }
