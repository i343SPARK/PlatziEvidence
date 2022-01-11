class Payment:
    id = int
    totalPayment = int

    def __init__(self, totalPayment) -> None:
        self.totalPayment = totalPayment