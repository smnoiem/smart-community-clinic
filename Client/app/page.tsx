"use client"

import { useState } from "react"
import { useRouter } from "next/navigation"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/components/ui/select"

function Page() {
  const router = useRouter()
  const [selectedValue, setSelectedValue] = useState("")

  const handleSelectChange = (value: string) => {
    setSelectedValue(value)
  }

  const handleSubmit = (event: React.FormEvent) => {
    event.preventDefault()
    if (selectedValue === "doctor") {
      router.push("/chatbox")
    } else if (selectedValue === "practitioner") {
      router.push("/practitioner")
    }
  }
  return (
    <div className="mx-auto p-8 flex justify-center w-5/6">
      <form onSubmit={handleSubmit}>
        <Card className="border-0">
          <CardHeader className="space-y-1">
            <CardTitle className="text-2xl text-center">Welcome To The Clinic</CardTitle>
            <CardDescription className="text-center">
              Good to see you again
            </CardDescription>
          </CardHeader>
          <CardContent className="grid gap-4">
            <div className="grid gap-2">
              <Label htmlFor="email">Email</Label>
              <Input id="email" type="email" placeholder="email@example.com" />
            </div>
            <div className="grid gap-2">
              <Label htmlFor="password">Password</Label>
              <Input id="password" type="password" />
            </div>
            <div className="flex flex-col space-y-1.5">
              <Label htmlFor="framework">Role</Label>
              <Select onValueChange={handleSelectChange}>
                <SelectTrigger id="framework">
                  <SelectValue placeholder="Select" />
                </SelectTrigger>
                <SelectContent position="popper">
                  <SelectItem value="doctor">Doctor</SelectItem>
                  <SelectItem value="practitioner">Practitioner</SelectItem>
                </SelectContent>
              </Select>
            </div>
          </CardContent>
          <CardFooter>
            <Button>Sign In</Button>
          </CardFooter>
        </Card>
      </form>
    </div>
  )
}

export default Page